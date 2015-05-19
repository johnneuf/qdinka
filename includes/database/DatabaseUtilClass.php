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
     * Generates a PDO database connection
     * @param int $database This is what database you are wanting to connect to. The default is the normal database.
     * @return bool|\PDO Returns a database object or false if something is not right
     */
    public static function db_connect($database = self::DATABASE_NORMAL)
    {
        if ($database == self::DATABASE_USER) {
            return new \PDO(DB_USER_DNS, DB_USER_USER, DB_USER_PASSWORD);
        } elseif ($database == self::DATABASE_NORMAL) {
            return new \PDO(DB_MAIN_DNS, DB_MAIN_USER, DB_MAIN_PASSWORD);
        }

        return false;
    }

    /**
     * Gets data from the database and saves the values in a record form
     * @param \PDO $PDO Connection to the database
     * @param string $sql Query statement that you
     * @param array $values Values to pass
     * @return bool|array key=>record will return false if there is nothing found by the query
     */
    public static function get(\PDO $PDO, $sql, array $values = null)
    {
        //Execute the SQL
        if (is_null($values)) {
            $stmt = $PDO->query($sql);
        } else {
            $stmt = $PDO->prepare($sql);
            $stmt->execute($values);
        }

        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        //Make Objects from the data
        $objects = array();

        if (!$rows || empty($rows)) {
            return false;
        }

        foreach ($rows as $row) {

            $object = new \stdClass();

            foreach ($row as $key => $value) {
                $object->$key = $value;
            }

            $objects[] = $object;

        }

        //Do not send an array if there is only one object
        return $objects;

    }
}