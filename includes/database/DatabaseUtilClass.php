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
     * Default way to access the database
     * @param string $schema Name of the schema that you are wanting to connect to
     * @param string $sqlQuery The sql query to run against the database
     * @param array $values The values that compliment the sql statement
     */
    public static function query($schema, $sqlQuery, array $values = array())
    {

    }

    public static function record_error($class, $function, $message)
    {
        //Try to do the query
        try {
            //Connect
            $PDO = self::connect(DB_USER_SCHEMA);

            //Double check to see there is a connection
            if (!$PDO) {
                return;
            }

            //Do the query
            $sql = 'insert into system_errors (ip, class, function, message, dts) value (?, ?, ?, ?, now())';
            $statement = $PDO->prepare($sql);
            $statement->execute([get_user_ip(),
                $class,
                $function,
                $message
            ]);

        } catch (\PDOException $exception) {
            return;
        }
    }
}