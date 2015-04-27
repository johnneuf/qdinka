<?php
/**
* Kendall Holm
* Created on 4/23/2015 at 11:59 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\users;


use includes\database\DatabaseUtil;

class AuthenticationUtil {
    public static function login($userEmail, $password)
    {
        //init
        $dbc = DatabaseUtil::db_connect(DatabaseUtil::DATABASE_USER);

        //Get the record
        
    }
}