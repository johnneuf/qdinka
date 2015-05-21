<?php
/**
* Kendall Holm
* Created on 5/11/2015 at 9:51 AM
* @email kendalldarkmere@gmail.com
*/

require_once('../../includes/autoload.php');

if (param('subPage')) {
    $page = new \includes\pages\admin\UserAdmin(param('subPage'));
} else {
    $page = new \includes\pages\admin\UserAdmin('Show All Users');
}

$page->render();