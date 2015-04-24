<?php
/**
* Kendall Holm
* Created on 4/24/2015 at 10:05 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\database;


class DatabaseUtil {
    //database constants
    const DATABASE_USER = 0;
    const DATABASE_NORMAL = 1;

    /**
     * Generates a mysqli database connection
     * @param int $database This is what database you are wanting to connect to. The default is the normal database.
     * @return bool|\mysqli Returns a database object or false if something is not right
     */
    public static function db_connect($database = self::DATABASE_NORMAL)
    {
        if ($database == self::DATABASE_USER) {
            return new \mysqli(USR_HOST, USR_USER, USR_PASSWORD, USR_DATABASE);
        } else {
            //TODO: Put in the connection for the normal database
        }

        return false;
    }
}