<?php
/**
*
*@author Partha Maiti <maiti.partha@yaho.com>
*/

require_once

function __autoload($class_name)
{
	include_once '$_SERVER["DOCUMENT_ROOT"]'.$class_name .'Class.php'
}

;?>