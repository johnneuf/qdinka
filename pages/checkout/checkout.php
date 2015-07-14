<?php

/**
* Ricardo Frias
* Created on 7/9/2015 at 6:23 PM
* @email ricardoffrias@gmail.com


*here is a comment
**/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\CheckoutPage('Checkout');
$page->render();
