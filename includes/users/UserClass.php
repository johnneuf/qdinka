<?php
/**
* Kendall Holm
* Created on 4/24/2015 at 11:08 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;


class User {
    //Properties
    public $userName;
    public $email;
    public $token;
    public $recordID;
    public $privileges;

    /**
     * Serialize the class
     * @return string The serialized class
     */
    function __toString()
    {
        return serialize($this);
    }

}