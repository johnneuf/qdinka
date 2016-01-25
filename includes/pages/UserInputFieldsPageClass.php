<html>
	<body>
		<?php
		/**
		*@author Partha Maiti <maiti.partha@yahoo.com>
		*/
		
		class UsersPage
		{
			//defines variables and sets to empty values
			public static $profile_pic=$name_of_user=$reviews=$userID=$purchases=$favorites="";
			public static $profilePicERR=$nameOfUserERR=$reviewsERR=$userIDERR=$purchasesERR=$favoritesERR="";
		
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
						if(empty($_POST["profile_pic"])
						{
							self::$profilePicERR="profile picture required";
						}else
						{
							self::$profile_pic=self::test_user_input($_POST["profile_pic"]);
							
						}
						if(empty($_POST["name_of_user"])
						{
							self::$nameOfUserERR="name required";
						}else
						{
							self::$name_of_user=self::test_user_input($_POST["name_of_user"]);
							
						}
						if(empty($_POST["reviews"])
						{
							self::$reviewsERR="reviews required";
						}else
						{
							self::$reviews=self::test_user_input($_POST["reviews"]);
							if(!preg_match("/^[a-zA-Z ]*$/"),$reviews)
							{
								self::$reviewsERR="only letters and white space are allowed";
							}
						}
						if(empty($_POST["userID"]))
						{
							self::$userIDERR="user id required";
						}else
						{
							self::$userID=self::test_user_input($_POST["userID"]);
						}
						if(empty($_POST["purchases"]))
						{
							self::$purchasesERR="purchases required";
						}else
						{
							self::$purchases=self::test_user_input($_POST["purchases"]);
						}
						if(empty($_POST["favorites"]))
						{
							self::$favoritesERR="favorites required";
						}else
						{
							self::$favorites=self::test_user_input($_POST["favorites"]);
						}
			
			
					}
			}	
		}
		
		
		;?>
		
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
			First Name: <input type="text" name="profile_pic" value="<?php echo UsersPage::$profile_pic ;?>"><span class="error">*<?php echo UsersPage::$profilePicERR;?></span><br>
			Last Name:<input type="text" name="name_of_user" value="<?php echo UsersPage::$name_of_user ;?>"><span class="error">*<?php echo UsersPage::$nameOfUserERR;?></span><br>
			E-mail:<input type="text" name="reviews" value="<?php echo UsersPage::$reviews;?>"><span class="error">*<?php echo UsersPage::$reviewsERR ;?></span><br>
			User ID:<input type="text" name="userID" value="<?php echo UsersPage::$userID ;?>"><span class="error">*<?php echo UsersPage::$userIDERR ;?></span><br>
			User Name:<input type="text" name="purchases" value="<?php echo UsersPage::$purchases ;?>"><span class="error">*<?php echo UsersPage::$purchasesERR ;?></span><br>
			Password: <input type="text" name="favorites" value="<?php echo UsersPage::$favorites ;?>"><span class="error">*<?php echo UsersPage::$favoritesERR ;?></span><br>
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>