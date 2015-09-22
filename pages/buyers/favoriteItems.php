<?php

/**
* Nannalin Higgins
* Created on 9/15/2015 at 7:00 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerFavoritePage('Favorite Items');
$page->render();



