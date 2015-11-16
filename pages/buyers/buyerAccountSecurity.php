<?php

/**
* Nannalin Higgins
* Created on 11/4/2015 at 12:40 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerSecurityPage('Security');
$page->render();

