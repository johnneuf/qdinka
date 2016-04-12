<?php
/**
*@author Partha Maiti <maiti.partha@yahoo.com>
*/
class Dbase_connect_insert_user_input
{
	//variables needed in establishing a connection between php and database server using PDO class
	public static $server_name = "localhost";
	public static $dbname = "";
	public static $username = "";
	public static $password = "";
	
	try
	{
		//establish the connection using PDO class and create an instance of the PDO class and thus an object
		$pdoobjconnec = new PDO("mysql:host =; dbname = ",$username,$password);
		
		//set the errormode to throwing an exception
		$pdoobjconnec -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//constructing the sql query
		$sql_insert = "INSERT INTO () VALUES()";
		
		//make a prepared statements for repeated later execution with different values and the prepared statement is essentially a PDO statement object from the PDO statement class
		$pdostmntobj = $connec -> prepare($sql_insert)
		
		//bind parameters to the prepared statements
		$pdostmntobj -> bindParam();
		
		//inserting a row of values which corresponds with its given binded parameters
		
		$pdostmntobj -> exec();
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