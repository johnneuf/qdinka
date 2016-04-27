<html>
	<body>
		<?php
		/**
		*@author Partha Maiti <maiti.partha@yahoo.com>
		*/
		
		class UserInputFieldsSellerPageClass
		{
			//defines variables and sets to empty values
			public static $listings = $messages = $orders = $card_number = $card_type = "";
			public static $listings_err = $messages_err = $orders_err$ = $card_number_err = $card_type_error = "";
		
			//tests user input on the names of the form controls
			public static function test_user_input($user_input)
			{
				$user_input=htmlspecialchars($user_input);
				user_input=trim($user_input);
				$user_input=stripslashes($user_input);
				return $user_input;
			}
			//function to validate payment user inputs
			function validate_payment_info_user_input($credit_card_number,$len_of_card_num)
			{
				if(strlen($credit_card_number)==$len_of_card_num)
				{
					self::$card_number = $credit_card_number;
					if ($credit_card_number == stristr($credit_card_number,"4"))
					{
						self::$card_type = "Visa";
					}
				}
				else{
					self::$card_number_err = "card type and number mismatch";
				}
			}
			
		
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
							if(!preg_match("/^[a-zA-Z ]*$/"),$name_of_user)
							
						}
						if(empty($_POST["orders"])
						{
							self::$orders_err="order required";
						}else
						{
							self::$orders=self::test_user_input($_POST["orders"]);
							
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
			
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>