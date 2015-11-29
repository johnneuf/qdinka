<?php

/**
* Nannalin Higgins
* Created on 10/31/2015 at 12:40 PM
* @email nannalin14@gmail.com
*/

require_once('../../includes/autoload.php');

debug_errors();

$page = new \includes\pages\buyers\BuyerNotificationsPage('Notifications');
$page->render();

