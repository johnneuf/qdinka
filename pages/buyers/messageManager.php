<?php

/**
* Nannalin Higgins
* Created on 9/14/2015 at 10:45 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerMessageManagerPage('Message Manager');
$page->render();

