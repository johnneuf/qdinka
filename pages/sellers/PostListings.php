<?php
require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\sellers\PostListings('Post Listings Page');
$page->render();
$page->turnon();
