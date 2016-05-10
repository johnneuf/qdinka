<html>
	<body>
		<?php
		/**
		*@author Partha Maiti <maiti.partha@yahoo.com>
		*/
		
		class UserInputFieldsSellerPageClass
		{
			//defines variables and sets to empty values
			public static $listings = $messages = $orders = $address = $city = $state = $zip_code =  "" ;
			public static $listings_err = $messages_err = $orders_err = $address_err = $city_err= $state_err = $zip_code_err =   "";
		
			//tests user input on the names of the form controls
			public static function test_user_input($user_input)
			{
				$user_input=htmlspecialchars($user_input);
				user_input=trim($user_input);
				$user_input=stripslashes($user_input);
				return $user_input;
			}
			//creating an algorithm to validate zip code
			//using a data structure ; function
			public static function validate_zip($user_entered_zip_code)
			{
				//using a control structure to first determine if the zip code user entered is proper length
				if (strlen($user_entered_zip_code) == 5  && preg_match("/^([0-9]{5})$/i",$user_entered_zip_code) )
				{
					//add on the respective - and four digits to the zip code user entered use web API tools if possible
					$user_entered_zip_code = ;
				}
		
		
		
			}
			//function to validate payment user inputs
			//function validate_payment_info_user_input($credit_card_number,$len_of_card_num)
			//{
				//if(strlen($credit_card_number)==$len_of_card_num)
				//{
					//self::$card_number = $credit_card_number;
					//if ($credit_card_number == stristr($credit_card_number,"4"))
					//{
						//self::$card_type = "Visa";
					//}
				//}
				//else{
					//self::$card_number_err = "card type and number mismatch";
				//}
			//}
			
		
			//When form data is sent with http POST method
			public static function validate_form_data($_SERVER["REQUEST_METHOD"])
			{	
				if ($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if(empty($_POST["listings"])
						{
							self::$listings_err="listing required";
						}else
						{
							self::$listings=self::test_user_input($_POST["listings"]);
							
						}
						if(empty($_POST["messages"])
						{
							self::$messages_err="message required";
						}else
						{
							self::$messages=self::test_user_input($_POST["messages"]);
						
						}
						if(empty($_POST["orders"])
						{
							self::$orders_err="order required";
						}else
						{
							self::$orders=self::test_user_input($_POST["orders"]);
							
						}
						if(empty($_POST["address"]))
						{
							self::$address_err = "address required";
						}else
						{
							self::$address = $_POST["address"];
						}
						if(empty($_POST["city"]))
						{
							self::$city_err = "city required";
						}else
						{
							self::$city = $_POST["city"];
						}
						if(empty($_POST["state"]))
						{
							self::$state_err="state required";
						}else
						{
							self::$state = $_POST["state"];
						}
						if(empty($_POST["zipcode"]))
						{
							self::$zip_code_err = "zip code required";
						}else
						{
							self::$zip_code = $_POST["zipcode"];
						}
						
			
			
					}
			}	
		}
		
		
		;?>
		
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
			Listings: <input type="text" name="listings" value="<?php echo UserInputFieldsSellerPageClass::$listings ;?>"><span class="error">*<?php echo UserInputFieldsSellerPageClass::$listings_err;?></span><br>
			Messages:<input type="text" name="messages" value="<?php echo UserInputFieldsSellerPageClass::$messages ;?>"><span class="error">*<?php echo UserInputFieldsSellerPageClass::$messages_err?></span><br>
			Orders:<input type="text" name="orders" value="<?php echo UserInputFieldsSellerPageClass::$orders;?>"><span class="error">*<?php echo UserInputFieldsSellerPageClass::$orders_err;?></span><br>
			Address:<input type = "text" name= "address">
			City: <input type = "text" name ="city">
			State: <input type = "text" name= "state">
			Zip Code: <input type ="text" name= "zipcode" value ="<?php echo ;?>"><span class= "error">*<?php echo ;?></span><br>
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>