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
        } elseif ($database == self::DATABASE_NORMAL) {
            return new \mysqli(MAIN_HOST, MAIN_USER, MAIN_PASSWORD, MAIN_DATABASE);
        }

        return false;
    }

    /**
     * Gets data from the database and saves the values in a record form
     * @param \mysqli $mysqli Connection to the database
     * @param string $sqlStatement Query statement that you
     * @return array key=>record will return false if there is nothing found by the query
     */
    public static function get(\mysqli $mysqli, $sqlStatement)
    {
        //Query the database
        $result = $mysqli->query($sqlStatement);

        $objects = array(); //This is to be returned

        //Check to see if there is any objects returned and if not the send a false
        if (!$result) {
            return false;
        }

        //Put everything into a record
        while ($row = $result->fetch_assoc()) {
            $record = new \stdClass();

            //Loop through all of the columns and save them as fields
            foreach ($row as $key=>$value) {
                $record->$key = $value;
            }

            //Save the record
            $objects[] = $record;

        }

        return $objects;
    }

    /**
     * Gets a record or records based on a prepared query
     * @param \mysqli $mysqli Connection to the database
     * @param string $sql SQL statement
     * @param array $values Values that you want to pass to the query
     * @return array|bool Returns false if there was a problem or if there was nothing to return
     */
    public static function prepared_get(\mysqli $mysqli, $sql, array $values)
    {
        //Check to see if there is a connection if not fail
        if (!$mysqli){
            return false;
        }

        //Init
        $statement = $mysqli->prepare($sql);
        call_user_func([$statement, 'bind_param'], self::bind_arguments($values));
        $statement->execute();

        $meta = $statement->result_metadata();
        $objects = array();
        $params = array();

        while ($field = $meta->fetch_field()) {
            $params[] = &$row[$field->name];
        }

        call_user_func([$statement, 'bind_result'], $params);

        while ($statement->fetch()) {
            $object = new \stdClass();

            foreach ($row as $key => $value) {
                $object->$key = $value;
            }

            $objects[] = $object;

        }

        return $objects;
    }

    /**
     * Generates an array of arguments for bind
     * @param array $values The values that you will be passing to mysqli prepare
     * @return array An array of arguments to be passed to the bind method of mysqli
     */
    private static function bind_arguments(array $values)
    {
        //Loop through and generate a string that represents the types of all of the values in the array
        $typeString = '';
        foreach ($values as $value) {
            $typeString .= substr(gettype($value), 1);
        }

        $returnString = array_unshift($values, $typeString);

        return $returnString;
    }
}