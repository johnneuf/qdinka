<?php
/**
* Kendall Holm
* Created on 4/23/2015 at 10:34 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;


class SessionUtil {
    /**
     * Get session variables by supplied variable
     * @param string $param Parameter that you want to return
     * @return mixed Returns false if there is nothing there else it will return what it finds
     */
    static public function session($param)
    {
        return (isset($_SESSION[$param])) ? $_SESSION[$param] : false;
    }

    /**
     * Starts a secure session. There is no need to use this so long as you use the templates as it auto loads this method
     */
    public static function start_session()
    {
        //Check to see if cookies only can be used
        if (ini_set('session.use_only_cookies', 1) === false) {
            header('Location: /error/error.php?error=Could not initiate a safe session (ini_set)');
            return;
        }

        //IF there is no session then start one
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

    }

    /**
     * Sets the parameter to a value in the session
     * @param string $param The name of the session parameter.
     * @param mixed $value The value you want to set
     */
    public static function session_set($param, $value)
    {
        $_SESSION[$param] = $value;
    }

    /**
     * Creates a Token
     * @return string Token created from the users IP and time
     */
    public static function token()
    {
        return hash('sha512', time() . $_SERVER['REMOTE_ADDR']);
    }
}