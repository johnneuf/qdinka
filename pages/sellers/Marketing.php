<?php


require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\marketingPage('Marketing page');
$page->render();
$page->turnon();