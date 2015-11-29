<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\PaymentsPage('Seller Payments');
$page->render();
$page->turnon();