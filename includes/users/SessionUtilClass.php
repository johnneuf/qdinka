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
        return ($_SESSION[$param]) ? $_SESSION[$param] : false;
    }

    public static function start_session()
    {

    }
}