<?php
/**
* Kendall Holm
* Created on 5/11/2015 at 11:27 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\misc;


use includes\database\DatabaseUtil;

class Paginator {
    private $mysqli;
    private $limit = 0;
    private $pageNumber = 1;
    private $sqlString;
    private $totalRecords;

    function __construct(\mysqli $mysqli, $sqlString)
    {
        //Save the defaults
        $this->mysqli = $mysqli;
        $this->sqlString = $sqlString;

        $records = DatabaseUtil::get($mysqli, $sqlString);
        $this->totalRecords = count($records);
    }

    public function get_records($limit = 25, $page = 1)
    {
        
    }

}