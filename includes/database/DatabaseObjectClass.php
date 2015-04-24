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
    private $type;
    private $ID;
    private $table;
    private $column;

    public function __construct($databaseType, $type, $value, $table, $column, $ID)
    {
        $this->database;
        $this->value = $value;
        $this->table = $table;
        $this->ID = $ID;
        $this->type = $type;
        $this->column = $column;
    }

    /**
     * Saves the changes to the value
     */
    public function save()
    {
        $db = DatabaseUtil::db_connect($this->database);

        $sql = $db->prepare('update ' . $this->table . 'set ' . $this->column . ' = ? where ID=' . $this->ID);
        $sql->bind_param($this->type, $this->value);
        $sql->execute();
        $sql->close();
    }

}