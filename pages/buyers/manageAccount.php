<?php

/**
* Nannalin Higgins
* Created on 10/04/2015 at 11:00 am
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerManageAccountPage('Personal Info');
$page->render();