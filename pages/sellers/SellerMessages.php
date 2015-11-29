<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\SellerMessages('Seller Messages');
$page->render();
$page->turnon();