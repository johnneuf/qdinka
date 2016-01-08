<?php
require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\PublishListing('publish Listings Page');
$page->render();
$page->turnon();
