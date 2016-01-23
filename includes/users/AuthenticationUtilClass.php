<?php
/**
* Kendall Holm
* Created on 4/23/2015 at 11:59 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;

use includes\database\DatabaseUtil;

class AuthenticationUtil {
    //Privilege Levels
    const ENUM_AUTH_NULL = 0;
    const ENUM_AUTH_VIEW = 1;
    const ENUM_AUTH_WRITE = 2;
    const ENUM_AUTH_EDIT = 4;

    //Group IDs
    const ENUM_GROUP_NONE = 0;
    const ENUM_GROUP_ADMIN = 1;
    const ENUM_GROUP_VENDOR = 2;
    const ENUM_GROUP_CUSTOMER = 3;

    /**
     * Checks to see if a person is logged in
     * @return bool True if the person is logged in and false if they are not
     */
    public static function is_logged_in()
    {
        $user = session_object(AUTH_KEY);

        if (!$user) {
            return false;
        }

        return ($user->get_token() == hash(AUTH_HASH, get_user_ip()));
    }

    /**
     * Gets the user from the session
     * @return bool|\stdClass False if there is no one to get. A user if there is one.
     */
    public static function get_user()
    {
        return (self::is_logged_in()) ? session_object(AUTH_KEY) : false;
    }

    /**
     * Checks to see if a user has a privilege
     * @param User $user The user you want to check
     * @param int $group The group check
     * @param int $level The level you want to check
     * @return bool True of the person has the privilege
     */
    public static function has_privilege(User $user, $group, $level)
    {
        $groups = [
            self::ENUM_GROUP_ADMIN => 'adminPriv',
            self::ENUM_GROUP_VENDOR => 'vendorPriv',
            self::ENUM_GROUP_CUSTOMER => 'customerPriv'
        ];

        //We dont use the none group
        if ($group == self::ENUM_GROUP_NONE) {
            return false;
        }

        return ($user->get_userDBO()->$groups[$group] & $level) ? true : false;
    }

    private static function log_login_failure()
    {
        //Get any past attempts
        $sql = 'select * from failed_attempts where ip = ? limit 1';
        $pastAttempt = DatabaseUtil::query(DB_USER_SCHEMA, $sql, [get_user_ip()]);

        $updateSQL = ($pastAttempt) ?
            'update failed_attempts set "count"=? where ip=?' :
            'insert into failed_attempts (ip, "count", override) values (?, ?, ?)';

        if ($pastAttempt) {

            $result = DatabaseUtil::query(
                DB_USER_SCHEMA,
                $updateSQL,
                [($pastAttempt->count + 1)]
            );

        } else {

            $result = DatabaseUtil::query(
                DB_USER_SCHEMA,
                $updateSQL, [get_user_ip(), 1, 0]
            );
        }

        //Something went wrong so we need to log this
        if (!$result) {
            DatabaseUtil::record_error(
                'AuthenticationUtil',
                'log_login_failure',
                'There was an error when logging an attempted failed login'
            );
        }
    }

    /**
     * Logs a user in
     * @param string $username User name
     * @param string $password Users Password
     * @return bool True if the login was successful and false if it wasnt
     */
    public static function login($username, $password)
    {
        //Get the user
        $sql = 'select * from "user" where userName = ? limit 1';
        $userQuery = DatabaseUtil::query(DB_USER_SCHEMA, $sql, [$username]);

        //If there was nothing returned then there is a fail
        if (!$userQuery) {
            self::log_login_failure();
            return false;
        }

        //Check the password
        if ($userQuery->password == hash(AUTH_HASH, $username . ':' . $password . ':' . $userQuery->salt)) {
            $user = new User($userQuery);
            session_save(AUTH_KEY, $user);
            return true;
        }

        //Failed Login
        self::log_login_failure();
        return false;
    }

    /**
     * Logs user out of the system
     * @return bool True if the user was logged out and false if they are not.
     */
    public static function logout()
    {
        //Destroys the cookies as well
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        return session_destroy();
    }

    /**
     * Sees if a user is banned
     * @return bool True if the user is banned
     */
    public static function is_banned()
    {
        //See if there is any occurrences
        $SQL = 'select `count` from failed_attempts where ip=? limit 1';
        $result = DatabaseUtil::query(DB_USER_SCHEMA, $SQL, [get_user_ip()]);

        //Nothing was returned
        if (!$result) {
            return false;
        }

        return ($result->count > AUTH_ALLOWED_FAIL && !$result->override);
    }

    public static function GetProgramIdentity ($programUserName)
    {

    }
}