<?php
/**
 * User: Kendall
 * Date: 1/19/2016
 * Time: 8:53 PM
 */

namespace includes\database;


class DatabaseObjectBase
{
    private $fields = array();

    /**
     * Connects to the Database based on the system
     * @param string $schema the schema that the is to be connected to.
     * @return \PDO The connection.
     */
    private static function Connect($schema)
    {
        //Create the DNS
        $DNS = 'mysql:host=localhost;dbname=' . $schema . ';charset=utf8';

        //Return the PHP Database Object
        return new \PDO($DNS, DB_USER_USER, DB_USER_PASSWORD);
    }
}