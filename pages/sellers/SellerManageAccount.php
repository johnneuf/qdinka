<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\ManageAccount('My Account');
$page->render();
$page->turnon();
