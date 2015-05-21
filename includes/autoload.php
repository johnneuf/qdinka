<?php
/**
 * Auto-loader
* Kendall Holm
* Created on 4/10/2015 at 7:16 AM
* @email kendalldarkmere@gmail.com
*/

require_once($_SERVER['DOCUMENT_ROOT'] . '/system/system.php'); //System Settings
require_once('global.php'); //Global methods and variables

//Auto loading of classes
spl_autoload_register(function ($class) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/' . str_replace('\\', '/', $class) . 'Class.php');
});