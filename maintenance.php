<?php
/**
 * Maintenance Page
* Kendall Holm
* Created on 4/10/2015 at 7:22 AM
* @email kendalldarkmere@gmail.com
*/

require('./includes/autoload.php');

$page = new \includes\pages\Maintenance('Maintenance');
$page->render();

//Editing to see