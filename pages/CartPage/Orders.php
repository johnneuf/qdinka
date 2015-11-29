<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\CartPage\Orders('Orders Page');
$page->render();
$page->turnon();
