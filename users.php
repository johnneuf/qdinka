<html>
	<body>
		<?php
		
		//defines variables and sets to empty values
		$firstName=$lastName=$email=$userID=$userName=$password="";
		$fnERR=$lnERR=$emailERR=$userIDERR=$userNameERR=$passwordERR="";
		
		//tests user input on the names of the form controls
		function test_user_input($user_input)
		{
			$user_input=htmlspecialchars($user_input);
			$user_input=trim($user_input);
			$user_input=stripslashes($user_input);
			return $user_input;
		}
		
		//When form data is sent with http POST method
		if ($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["firstName"])
			{
				$fnERR="first name required";
			}else
			{
				$firstName=test_user_input($_POST["firstName"]);
				if(!preg_match("/^[a-zA-Z ]*$/",$firstName))
				{
					$fnERR="letter and white space allowed only";
				}
			}
			if(empty($_POST["lastName"])
			{
				$lnERR="last name required";
			}else
			{
				$lastName=test_user_input($_POST["lastName"]);
				if(!preg_match("/^[a-zA-Z ]*$/",$lastName))
				{
					$lnERR="only letters and white space are allowed";
				}
			}
			if(empty($_POST["email"])
			{
				$emailERR="email required";
			}else
			{
				$email=test_user_input($_POST["email"]);
				if(!filter_var($email,FILTER_VALIDATE_EMAIL))
				{
					$emailERR="invalid email format";
				}
			}
			if(empty($_POST["userID"]))
			{
				$userIDERR="user id required";
			}else
			{
				$userID=test_user_input($_POST["userID"]);
			}
			if(empty($_POST["userName"]))
			{
				$userNameERR="user name required";
			}else
			{
				$userName=test_user_input($_POST["userName"]);
			}
			if(empty($_POST["password"]))
			{
				$passwordERR="password required";
			}else
			{
				$password=test_user_input($_POST["password"]);
			}
			
			
		}
		;?>
		
		<fieldset>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
			First Name: <input type="text" name="firstName" value="<?php echo $firstName ;?>"><span class="error">*<?php echo $fnERR;?></span><br>
			Last Name:<input type="text" name="lastName" value="<?php echo $lastName ;?>"><span class="error">*<?php echo $lnERR ;?></span><br>
			E-mail:<input type="text" name="email" value="<?php echo $email;?>"><span class="error">*<?php echo $emailERR ;?></span><br>
			User ID:<input type="text" name="userID" value="<?php echo $userID ;?>"><span class="error">*<?php echo $userIDERR ;?></span><br>
			User Name:<input type="text" name="userName" value="<?php echo $userName ;?>"><span class="error">*<?php echo $userNameERR ;?></span><br>
			Password: <input type="text" name="password" value="<?php echo $password ;?>"><span class="error">*<?php echo $passwordERR ;?></span><br>
			
			<input type="submit" >
			
			</form>
		</fieldset>
	
	</body>

</html>