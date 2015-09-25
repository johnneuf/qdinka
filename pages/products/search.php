<?php
/**
 * User: Kendall
 * Date: 9/24/2015
 * Time: 8:29 PM
 */

require_once('../../includes/autoload.php');

$page = new \includes\pages\products\SearchPage('Search');
$page->render();