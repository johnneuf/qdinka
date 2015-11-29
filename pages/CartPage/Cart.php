<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\CartPage\CartPage('Cart');
$page->render();
$page->turnon();
