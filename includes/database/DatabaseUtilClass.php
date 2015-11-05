<?php
/**
* Kendall Holm
* Created on 4/24/2015 at 10:05 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\database;


class DatabaseUtil {

    /**
     * Private function to setup a connection for database connection
     * @param string $schema The schema you wish to connect to
     * @return \PDO
     */
    private static function connect($schema)
    {
        //Create the DNS
        $DNS = 'mysql:host=localhost;dbname=' . $schema . ';charset=utf8';

        //Return the PHP Database Object
        return new \PDO($DNS, DB_USER_USER, DB_USER_PASSWORD);
    }

    /**
     * Gets a row or rows from the database and returns an array of or a single database row object
     * @param string $schema Name of the schema that you are wanting to connect to
     * @param string $sqlQuery The sql query to run against the database
     * @param array $values The values that compliment the sql statement
     */
    public static function get_rows($schema, $sqlQuery, array $values = array())
    {

    }

    /**
     * Used to alter a row or rows of a database and returns true if the operation was successful
     * @param string $schema The schema you want to connect to
     * @param string $sqlQuery The sql query that you want to run against the database
     * @param array $values The values that compliment the sql statement
     */
    public static function alter_rows($schema, $sqlQuery, array $values = array())
    {

    }
}