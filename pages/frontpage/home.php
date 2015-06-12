<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 7:35 PM
* @email kendalldarkmere@gmail.com
*/

require_once('../../includes/autoload.php');

if (param('title')) {
    $page = new \includes\pages\FrontPage(param('title'));
} else {
    $page = new \includes\pages\FrontPage('All Products');
}

$page->render();