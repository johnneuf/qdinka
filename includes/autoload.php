<?php
/**
 * Auto-loader
* Kendall Holm
* Created on 4/10/2015 at 7:16 AM
* @email kendalldarkmere@gmail.com
*/

require_once('./system/system.php'); //System Settings
require_once('global.php'); //Global methods and variables

//Auto loading of classes
spl_autoload_extensions('class.php');
spl_autoload_register();