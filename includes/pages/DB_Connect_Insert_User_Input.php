<?php
/**
*@author Partha Maiti <maiti.partha@yahoo.com>
*/
class Dbase_connect_insert_user_input
{
	//variables needed in establishing a connection between php and database server using PDO class
	public $server_name = "";
	public $dbname = "";
	public $username = "";
	public $password = "";
	
	try
	{
		//establish the connection
		$connec = new PDO("mysql:host =; dbname = ",$username,$password);
		
		//set the errormode to throwing an exception
		$connec -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//constructing the sql query
		$sql_insert = "INSERT INTO () VALUES()";
		
		//make a prepared statements for repeated later execution with different values
		$stmnt = $connec -> prepare($sql_insert)
		
		//bind parameters to the prepared statements
		$stmnt -> bindParam();
		
		//inserting a row of values which corresponds with its given binded parameters
		
		$stmnt -> exec();
		echo "row of values successfully inserted into db";
	//	catching errors with PDO 
	} 
	catch (PDOException $e)
	{
		echo "error".$e -> getMessage ();
	}
	$connec = null;
}

;?>