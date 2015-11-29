<html>
	<body>
		<?php
		class UsersPage
		{
			//defines variables and sets to empty values
			public static $firstName=$lastName=$email=$userID=$userName=$password="";
			public static $fnERR=$lnERR=$emailERR=$userIDERR=$userNameERR=$passwordERR="";
		
			//tests user input on the names of the form controls
			public static function test_user_input($user_input)
			{
				$user_input=htmlspecialchars($user_input);
				user_input=trim($user_input);
				$user_input=stripslashes($user_input);
				return $user_input;
			}
		
			//When form data is sent with http POST method
			public static function validate_form_data()
			{	
				if ($_SERVER["REQUEST_METHOD"]=="POST")
					{
						if(empty($_POST["firstName"])
						{
							self::$fnERR="first name required";
						}else
						{
							self::$firstName=self::test_user_input($_POST["firstName"]);
							if(!preg_match("/^[a-zA-Z ]*$/",$firstName))
							{
								self::$fnERR="letter and white space allowed only";
							}
						}
						if(empty($_POST["lastName"])
						{
							self::$lnERR="last name required";
						}else
						{
							self::$lastName=self::test_user_input($_POST["lastName"]);
							if(!preg_match("/^[a-zA-Z ]*$/",$lastName))
							{
								self::$lnERR="only letters and white space are allowed";
							}
						}
						if(empty($_POST["email"])
						{
							self::$emailERR="email required";
						}else
						{
							self::$email=self::test_user_input($_POST["email"]);
							if(!filter_var($email,FILTER_VALIDATE_EMAIL))
							{
								self::$emailERR="invalid email format";
							}
						}
						if(empty($_POST["userID"]))
						{
							self::$userIDERR="user id required";
						}else
						{
							self::$userID=self::test_user_input($_POST["userID"]);
						}
						if(empty($_POST["userName"]))
						{
							self::$userNameERR="user name required";
						}else
						{
							self::$userName=self::test_user_input($_POST["userName"]);
						}
						if(empty($_POST["password"]))
						{
							self::$passwordERR="password required";
						}else
						{
							self::$password=self::test_user_input($_POST["password"]);
						}
			
			
					}
			}	
		}
		
		
		;?>
		
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
			First Name: <input type="text" name="firstName" value="<?php echo UsersPage::firstName ;?>"><span class="error">*<?php echo UsersPage::fnERR;?></span><br>
			Last Name:<input type="text" name="lastName" value="<?php echo UsersPage::lastName ;?>"><span class="error">*<?php echo UsersPage::lnERR ;?></span><br>
			E-mail:<input type="text" name="email" value="<?php echo UsersPage::email;?>"><span class="error">*<?php echo UsersPage::emailERR ;?></span><br>
			User ID:<input type="text" name="userID" value="<?php echo UsersPage::userID ;?>"><span class="error">*<?php echo UsersPage::userIDERR ;?></span><br>
			User Name:<input type="text" name="userName" value="<?php echo UsersPage::userName ;?>"><span class="error">*<?php echo UsersPage::userNameERR ;?></span><br>
			Password: <input type="text" name="password" value="<?php echo UsersPage::password ;?>"><span class="error">*<?php echo UsersPage::passwordERR ;?></span><br>
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>