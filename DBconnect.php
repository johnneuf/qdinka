<?php
class DBconnect{
	//connection to be opened
	private static $connection=False;
	
	//connection values
	private static $db_server=""; 
	private static $db_username="";
	private static $db_password="";
	private static $db_name="";
	
	//stores connection values
	private static function setupconn($db_server,$db_username,$db_password,$db_name){
		
	}
	
	//quires database
	$query_database=get_user_inp();
	public static function query($query_database){
		
		
	}
	//test connection and query database or return error
	public static function conn2db(){
		try{
			$conn  = new PDO (DBconnect::setupconn);
			$query = self::query;
			//set PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			echo"connection successful";
		}catch(PDOException $e){
			echo"connection failed". $e->getMessage();
		}
		
		
		
	}
	
	
	
}


;?>