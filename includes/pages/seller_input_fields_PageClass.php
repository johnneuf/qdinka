<html>
	<body>
		<?php
		/**
		*@author Partha Maiti <maiti.partha@yahoo.com>
		*/
		
		class UsersPage
		{
			//defines variables and sets to empty values
			public static $listings=$messages=$orders="";
			public static $listingsErr=$messagesErr=$ordersErr="";
		
			//tests user input on the names of the form controls
			public static function test_user_input($user_input)
			{
				$user_input=htmlspecialchars($user_input);
				user_input=trim($user_input);
				$user_input=stripslashes($user_input);
				return $user_input;
			}
		
			//When form data is sent with http POST method
			public static function validate_form_data($_SERVER["REQUEST_METHOD"])
			{	
				if ($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if(empty($_POST["listings"])
						{
							self::$listingsErr="listing required";
						}else
						{
							self::$listings=self::test_user_input($_POST["listings"]);
							
						}
						if(empty($_POST["messages"])
						{
							self::$messagesErr="message required";
						}else
						{
							self::$messages=self::test_user_input($_POST["messages"]);
							
						}
						if(empty($_POST["orders"])
						{
							self::$ordersErr="order required";
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
			Listings: <input type="text" name="listings" value="<?php echo UsersPage::$listings ;?>"><span class="error">*<?php echo UsersPage::$listingsErr;?></span><br>
			Messages:<input type="text" name="messsages" value="<?php echo UsersPage::$messages ;?>"><span class="error">*<?php echo UsersPage::$messagesErr;?></span><br>
			Orders:<input type="text" name="orders" value="<?php echo UsersPage::$orders;?>"><span class="error">*<?php echo UsersPage::$ordersErr ;?></span><br>
			
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>