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
     * @return array key=>record
     */
    public static function get(\mysqli $mysqli, $sqlStatement)
    {
        //Query the database
        $result = $mysqli->query($sqlStatement);

        $objects = array(); //This is to be returned

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
}