<?php
/**
* Kendall Holm
* Created on 4/23/2015 at 11:59 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;


use includes\database\DatabaseObject;
use includes\database\DatabaseUtil;

class AuthenticationUtil {
    //Privilege Constants
    const PRIVILEGE_VIEW_MERCHANT_PAGE = 1;
    const PRIVILEGE_VIEW_ADMIN_PAGE = 2;
    const PRIVILEGE_PAGE_ADMIN = 4;
    const PRIVILEGE_USER_ADMIN = 8;
    const PRIVILEGE_ASSIGN_PRIVILEGES = 16;

    /**
     * Logs a user in
     * @param string $userEmail Email address the user is trying to login as
     * @param string $password The password the user is trying to login as
     * @return bool|string Returns false if the login is successful or returns an error string if unsuccessful
     */
    public static function login($userEmail, $password)
    {
        //Retrieve information from the users table
        if (!$conn = DatabaseUtil::db_connect(DatabaseUtil::DATABASE_USER)) {
            return 'Database Error contact administration.';
        }

        if ($result = DatabaseUtil::get($conn, 'SELECT * FROM users WHERE emailAddress=? LIMIT 1', [$userEmail])) {

            //check the password
            $result = array_shift($result);
            if (self::hash($password, $result->salt) == $result->password) {
                SessionUtil::session_set('loggedIn', self::user_token($result->salt));
                SessionUtil::session_set('user', serialize($result));
            } else {
                return 'Email or Password are incorrect.';
            }

        } else {
            return 'Email or Password are incorrect.';
        }
    }

    /**
     * Logs a user out
     */
    public static function logout()
    {
        $_SESSION = array();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 4200, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        session_destroy();
    }

    /**
     * Checks to see if a user is logged in
     * @return bool True if the user is logged in
     */
    public static function is_logged_in()
    {
        if (SessionUtil::session('user') && SessionUtil::session('loggedIn')) {

            $user = unserialize(SessionUtil::session('user'));

            if (self::user_token($user->salt) == SessionUtil::session('loggedIn')) {
                return true;
            }
        }

        return false;
    }

    /**
     * Intrusion detection. Checks for brute force attempts. Returns true if there was more than 5 attempts in a two hour period.
     * @param int $userID User ID to check
     * @param \mysqli $dbc The database connection
     * @return bool True if there was 5 failed attempts in two hours
     */
    private static function brute_force($userID, \mysqli $dbc)
    {
        $now = time();

        //Set the time for two hours (7200 seconds) in the past
        $checkTime = $now - 7200;

        if ($result = $dbc->prepare('select * from login_attemps where ID = ? and \'time\' > ' . $checkTime)) {
            $result->bind_param('i', $userID);
            $result->execute();
            $result->store_result();

            //If there was more than 5 attempts return true
            if ($result->num_rows > 5) {
                return true;
            } else {
                return false;
            }
        }

        //There was something that went wrong don't let the login attempt to go further
        return true;
    }

    /**
     * Hash a String
     * @param $string String to be hashed
     * @param string $salt The salt for the string
     * @return string Hashed string
     */
    public static function hash($string, $salt)
    {
        return hash('sha512', $string . $salt);
    }

    /**
     * @param \stdClass $user The user to check
     * @param int $privilege The privilege to check for
     * @return bool True if that person has privileges
     */
    public static function check_privilege(\stdClass $user, $privilege)
    {
        return ($user->privs & $privilege) ? true : false;
    }

    /**
     * Makes a Salt from the time and IP of the user
     * @return string Salt
     */
    public static function salt()
    {
        return hash('sha512', time() . $_SERVER['REMOTE_ADDR']);
    }

    /**
     * Returns a user token for login
     * @param string $salt The users salt
     * @return string The token
     */
    public static function user_token($salt)
    {
        return self::hash($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'], $salt);
    }

    public static function generate_password()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;

        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass); //turn the array into a string
    }
}