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
     * @return array|bool|\stdClass Returns false if fail, array or single stdClass object
     */
    public static function query($schema, $sqlQuery, array $values = array())
    {
        //Make the connection
        $PDO = self::connect($schema);

        //Try to do the query and catch any errors
        try {
            //prepare the statement
            $statement = $PDO->prepare($sqlQuery);

            //If there is any values then execute with the values
            $result = (empty($values)) ? $statement->execute() : $statement->execute($values);

            if (!$result) {
                //The query was a failure
                $PDO = null;
                return false;
            }

            $rows = $statement->fetchAll(\PDO::FETCH_OBJ);

            if (is_array($rows) && count($rows) == 1) {
                //There is only a row
                $PDO = null;
                return $rows[0];
            }

            if ($result && !$rows) {
                //This is not supposed to return anything
                $PDO = null;
                return $result;
            }

            //Return all of the rows
            return $rows;
        } catch (\PDOException $exception) {
            self::record_error('DatabaseUtil', 'query', $exception->getMessage());
            return false;
        }
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