<?php

/**
* Nannalin Higgins
* Created on 9/23/2015 at 11:00 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerCustomerReviewsPage('My Customer Reviews');
$page->render();