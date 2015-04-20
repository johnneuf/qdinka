<?php
/**
* Kendall Holm
* Created on 4/20/2015 at 8:09 AM
* @email kendalldarkmere@gmail.com
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../../includes/autoload.php');

$page = new \includes\pages\ProductPage();
$page->render();