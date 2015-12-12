<?php
/**
*
*@author Partha Maiti <maiti.partha@yaho.com>
*/

require_once '$_SERVER["DOCUMENT_ROOT"]';
require_once '$GLOBALS[""] ';


spl_autoload_register(function($class_name)
{
	include_once '$_SERVER["DOCUMENT_ROOT"]'.$class_name .'Class.php';
});

?>