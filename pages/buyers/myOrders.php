<?php

/**
* Nannalin Higgins
* Created on 9/5/2015 at 2:20 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerMyOrdersPage('My Orders');
$page->render();

