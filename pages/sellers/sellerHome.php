<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\SellerProfileHomePage('Seller Profile Home');
$page->render();
$page->turnon();
