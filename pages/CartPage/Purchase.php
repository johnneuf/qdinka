<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\CartPage\Purchase('Purchase Page');
$page->render();
$page->turnon();
