<?php
	
	//creating an algorithm to validate zip code
	//using a data structure ; function
	function ($user_entered_zip_code)
	{
		//using a control structure to first determine if the zip code user entered is proper length
		if (strlen($user_entered_zip_code) == 5  && preg_match("/^([0-9]{5})$/i",$user_entered_zip_code) )
		{
			//add on the respective - and four digits to the zip code user entered use web API tools if possible
			$user_entered_zip_code = ;
		}
		
		
		
	}

;?>