<?php



require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\MessageOpened('Seller Full Messages');
$page->render();
$page->turnon();