<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:52 PM
* @email kendalldarkmere@gmail.com
*/

require_once('../../includes/autoload.php');

//Check to see what page is being requested and set the title accordingly
if (param('page')) {
    $page = new \includes\pages\AdminPage(param('page'));
} else {
    $page = new \includes\pages\AdminPage('Admin');
}

