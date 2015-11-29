<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\OrdersDetailsPage('Seller Orders');
$page->render();
$page->turnon();