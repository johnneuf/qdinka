<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\Loginpage\loginpage('log-in');
$page->render();
$page->turnon();
