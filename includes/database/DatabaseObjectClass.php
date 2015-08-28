<?php
/**
* Kendall Holm
* Created on 4/24/2015 at 11:16 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\database;


class DatabaseObject {
    //Properties
    private $database;
    public $value;
    private $ID;
    private $table;
    private $column;

    /**
     * Database Object Constructor
     * @param int $databaseType The database type
     * @param mixed $value The value that is in that field
     * @param string $table table name from where the value comes from
     * @param string $column Column name from where the value comes from
     * @param int $ID The record ID number
     */
    public function __construct($databaseType, $value, $table, $column, $ID)
    {
        $this->database;
        $this->value = $value;
        $this->table = $table;
        $this->ID = $ID;
        $this->column = $column;
    }

    /**
     * Saves the changes to the value
     */
    public function save()
    {
        $db = DatabaseUtil::db_connect($this->database);
        $db->query('update ' . $this->table . 'set ' . $this->column . ' = ' . $this->value . ' where ID=' . $this->ID);
        $db->close();
    }

}