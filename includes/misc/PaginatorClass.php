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
    private $limit;
    private $pageNumber = 1;
    private $sqlString;
    private $totalRecords;
    private $passValues;

    function __construct(\PDO $PDO, $sql, array $passValues = null)
    {
        //Save the defaults
        $this->mysqli = $PDO;
        $this->sqlString = $sql;
        $this->passValues = $passValues;

        $records = DatabaseUtil::get($PDO, $sql, $passValues);

        $this->totalRecords = count($records);
    }

    /**
     * Gets the records for a specific page and limit
     * @param mixed/int $limit Set to all if you want to retrieve all records.
     * @param int $page The page you want to retrieve
     * @return \stdClass The records from the query
     */
    public function get_records($limit = 25, $page = 1)
    {
        //init
        $this->limit = $limit;
        $this->pageNumber = $page;

        //Set the limit
        $query = ($limit == 'all') ? $this->sqlString : $this->sqlString . ' limit ' . (($this->pageNumber - 1) * $this->limit) . ', ' . $this->limit;

        $records = DatabaseUtil::get($this->mysqli, $query, $this->passValues);

        //Make an object of the result so that it is more organized
        $result = new \stdClass();
        $result->records = $records;
        $result->page = $this->pageNumber;
        $result->limit = $this->limit;
        $result->total = $this->totalRecords;

        return $result;
    }

    /**
     * Gets the links in an ul form
     * @param int $links Number of links to show.
     * @param string $listClass Custom class you want to include for the ul
     * @param string $pageLink the link to the page
     * @return string The UL of all the links
     */
    public function get_links($listClass, $pageLink, $links = 7)
    {
        //If there is no limit then everything is displayed and thus no need for the links
        if ($this->limit == 'all') {
            return '';
        }

        $last = ceil($this->totalRecords / $this->limit);
        $start = (($this->pageNumber - $links) > 0) ? $this->pageNumber - $links : 1;
        $end = (($this->pageNumber + $links) < $last) ? $this->pageNumber + $links : $last;
        $html = '<ul class="' . $listClass . '">';
        $class = ($this->pageNumber == 1) ? 'disabled' : '';

        $html .= '<li class="' . $class . '"><a href="' . $pageLink . '&limit=' . $this->limit . '&pageNumber=' . ($this->pageNumber - 1) .
            '">&laquo;</a></li>';

        if ($start > 1) {
            $html .= '<li><a href="' . $pageLink . '&limit=' . $this->limit .'&pageNumber=1">1</a></li>';
            $html .= '<li class="disabled"><span>...</span></li>';
        }

        for ($index = $start; $index <= $end; $index++) {
            $class = ($this->pageNumber == $index) ? 'active' : '';
            $html .= '<li class="' . $class . '"><a href="' . $pageLink . '&limit=' . $this->limit . '&pageNumber=' . $index . '">' .
                $index . '</a></li>';
        }

        if ($end < $last) {
            $html .= '<li class="disabled"><span>...</span></li>';
            $html .= '<li><a href="' . $pageLink . '&limit=' . $this->limit . '&pageNumber=' . $last . '">' . $last . '</a></li>';
        }

        $class = ($this->pageNumber == $last) ? 'disabled' : '';
        $html .= '<li class="' . $class . '"><a href="' . $pageLink . '&limit=' . $this->limit . '&pageNumber=' . ($this->pageNumber + 1) .
            '">&raquo;</a></li>';
        $html .= '</ul>';

        return $html;
    }

}