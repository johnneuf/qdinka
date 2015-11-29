<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new\includes\pages\MyAccount\MyAccountPage('My Account');
$page->render();
$page->turnon();
