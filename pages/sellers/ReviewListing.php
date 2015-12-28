<?php
require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\ReviewListings('Review Listings Page');
$page->render();
$page->turnon();
