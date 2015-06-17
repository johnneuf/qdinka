<?php

/**
* Ricardo Frias
* Created on 6/8/2015 at 6:23 PM
* @email ricardoffrias@gmail.com


*here is a comment
**/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\CartPage('Cart');
$page->render();
