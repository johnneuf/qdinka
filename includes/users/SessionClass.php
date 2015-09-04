<?php
/**
* Kendall Holm
* Created on 4/23/2015 at 10:33 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;


class Session {
    //Properties
    private $token = null;
    private $loggedIn = false;

    function __construct()
    {
        // Set Token
        if (SessionUtil::session('token')) {
            $this->token = SessionUtil::session('token');
        }

        //Set the loggedIn
        $this->loggedIn = SessionUtil::session('loggedIn');
    }

}