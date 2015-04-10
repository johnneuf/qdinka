<?php
/**
* Kendall Holm
* Created on 4/9/2015 at 10:35 AM
* @email kendalldarkmere@gmail.com
*/
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);

require_once('./includes/autoload.php');

$page = new \includes\frontpage\FrontPage('Qdinka Home');
$page->render();