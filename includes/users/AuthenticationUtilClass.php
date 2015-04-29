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
    /**
     * Logs a user in
     * @param string $userEmail Email address the user is trying to login as
     * @param string $password The password the user is trying to login as
     * @return bool|string Returns false if the login is successful or returns an error string if unsuccessful
     */
    public static function login($userEmail, $password)
    {
        //init
        $dbc = DatabaseUtil::db_connect(DatabaseUtil::DATABASE_USER);

        //Get the record
        if ($result = $dbc->prepare('select * from users where emailAddress = ? limit 1')) {
            $result->bind_param('s', $userEmail);
            $result->execute();
            $result->store_result();

            $result->bind_result($ID, $userName, $email, $userPassword, $salt);
            $result->fetch();

//            $password = self::hash($password, $salt);
            $password = hash('sha512', $password . $salt);

            if ($result->num_rows == 1) {
                //Check for failed attempts
                if (self::brute_force($ID, $dbc)) {
                    //TODO: Add a way to send out an email that states there was too many attempts and the account is locked for two hours
                    $dbc->close();
                    return 'Account is locked for two hours due to too many failed login attempts.';
                } else {
                    //Check to see if the password matches and send a user object if true
                    if ($password == $userPassword) {
                        //Set the session stuff
                        $browser = $_SERVER['HTTP_USER_AGENT'];
                        $ID = preg_replace('/[^0-9]+/', '', $ID);
                        $userName = preg_replace('/[^a-zA-Z0-9_\-]+/', '', $userName);

                        SessionUtil::session_set('loggedIn', self::hash($password, $browser));

                        //User Object
                        $user = new User();
                        $user->recordID = $ID;
                        $user->userName = new DatabaseObject(DatabaseUtil::DATABASE_USER, $userName, 'users', 'userName', $ID);
                        $user->email = new DatabaseObject(DatabaseUtil::DATABASE_USER, $userEmail, 'users', 'emailAddress', $ID);
                        SessionUtil::session_set('user', (string)$user);

                        $dbc->close();
                        return false;
                    } else {
                        //Record the attempt
                        $now = time();
                        $dbc->query('insert into login_attemps(ID, time) values (' . $ID . ', ' . $now . ')');

                        $dbc->close();
                        return 'User name or password incorrect';
                    }
                }
            } else {
                $dbc->close();
                return 'User Name or Password incorrect';
            }
        }

        $dbc->close();
        return 'Database error. Contact the system administrator';
    }

    /**
     * Checks to see if a user is logged in
     * @return bool True if the user is logged in
     */
    public static function is_logged_in()
    {
        $dbc = DatabaseUtil::db_connect(DatabaseUtil::DATABASE_USER);

        $close = function ($bool) use ($dbc) {
            $dbc->close();
            return $bool;
        };

        //Check for session and the values that are needed for a user
        if (SessionUtil::session('loggedIn') && SessionUtil::session('user')) {
            $loginString = SessionUtil::session('loggedIn');
            $user = unserialize(SessionUtil::session('user'));
            $browser = $_SERVER['HTTP_USER_AGENT'];

            //Query the database return false if something went wrong
            if ($result = $dbc->prepare('select password from users where ID = ? limit 1')) {
                $result->bind_param('i', $user->recordID->value);
                $result->execute();
                $result->store_result();

                //Check to see if there is a record if not then send a false
                if ($result->num_rows == 1) {
                    $result->bind_result($password);
                    $result->fetch();

                    $loginCheck = self::hash($password, $browser);

                    //Check the login string
                    if ($loginString == $loginCheck) {
                        return $close(true);
                    }
                }
            }
        }

        return $close(false);
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
}