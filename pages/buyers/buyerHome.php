<?php

/**
* Nannalin Higgins
* Created on 8/29/2015 at 4:50 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerProfileHomePage('Buyer Profile Home');
$page->render();
$page->turnon()
