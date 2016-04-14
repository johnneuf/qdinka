<?php
/**
*@author Partha Maiti <maiti.partha@yahoo.com>
*/
class Dbase_connect_insert_user_input
{
	//variables needed in establishing a connection between php and database server using PDO class
	public static $server_name = "localhost";
	public static $dbname = "pman";
	public static $username = "partha";
	public static $password = "Number11";
}
	
	try
	{
		//establish the connection using PDO class and create an instance of the PDO class and thus an object
		$pdoconnecobj = new PDO("mysql:host = Dbase_connect_insert_user_input::$server_name; dbname = Dbase_connect_insert_user_input::$dbname", $username = Dbase_connect_insert_user_input::$username ,$password = Dbase_connect_insert_user_input::$password);
		
		//set the errormode to throwing an exception
		$pdoconnecobj -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		//constructing the sql query
		$sql = "SELECT * FROM new_users";
		
		//make a prepared statements for repeated later execution with different values and the prepared statement is essentially a PDO statement object from the PDO statement class
		$pdostmntobj = $pdoconnecobj -> query($sql);
		
		
		//fetch the result
		$pdostmntobjresult = $pdostmntobj -> fetchAll();
		
		//display the result of the query
		var_dump($pdostmntobjresult);
		
	//	catching errors with PDO 
	} catch (PDOException $e)
	{
		echo "error".$e -> getMessage ();
		die();
	}
	


;?>