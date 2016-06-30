<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="QdinkaPromo.css">
</head>

<body>
<?php 
//create a class as a blueprint to validate the form
class FormValidation
{
	//create properties to represent the validated form fieldset
	public static $email = "";
	public static $email_err = "";
	
	//create a method to validate user input
	public static function validate_user_input($user_input)
	{
		$user_input = stripcslashes($user_input);
		$user_input = trim($user_input);
		return $user_input;
	}
}
//create a function to process the post method of form
process_form_post_method()
{
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["email"]))
		{
			FormValidation::$email_err = "email required";
		}else
		{
			FormValidation::$email = FormValidation::validate_user_input($_POST["email"]);
			if(!filter_var(FormValidation::$email,FILTER_VALIDATE_EMAIL))
			{
				FormValidation::$email_err = "invalid email format";
			}
		}
	}	
}
;?>
<div class="headerr">
<img src="images\QdinkaFull25.png">
<a class="head-link1" href="">Sign-up</a>
<a class="head-link2" href="">Pricing</a>



</div>
<div class="container">
<h1>
The future of online sales is here <br>Say hello to a better way of selling</h1>

<object class="ad" 
data="https://www.youtube.com/embed/PMWmYf2043g">
</object>
<h2>Change the way you sell</h2>

<div class="emailbox">
<fieldset>
<form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>"  method="post">
email: <type = "text" name= "email"><br>
<input type = "submit">
</form>
</fieldset>
<button class="button">Sign-Up</button>
</div>

<h3>Qdinka is an option oriented marketplace - using flexible, competitive, and incentivised pricing<br> models - allowing online sellers a higher ROI than traditional marketplace options.</h3>

<div class="page2">
<img src="images/promoimg1.png">
<h4>Account Protection<br>
Secure and Encrypted</h4>
<p>Qdinka uses state-of-the-art security measures when handling your information. Your sensitive<br> personal information is fully encrypted.</p>
</div>
<div class="page3">
<h1>Give more,Get more</h1>
<img src="images/promoimg2.png">
<h2>Tiered Plan</h2>
<p class="para">Qdinka is the first marketplace to provide a tiered commission structure. The more items you sell, the <br>lower the commission, and higher your profit margin.</p>
<button class="button1">Learn more about tiered model</button>
</div>

<div class="page2">
<br>
<h4>No Commission Fee</h4>
<img src="images/promoimg3.png">
<h4>0% subsription plan</h4>
<br>
<p class="para1">Qdinka has made it so you can sell any product at a 0% commission. Punch the numbers and see which plan matches your needs.</p>
<button class="button2">Check-out the subscriptions</button>
</div>
<div class="page3">
<img src="images/promoimg4.png">
<h1>PassThrough<br>
Processing Option</h1>
<p class="para">Credit card processing can be costly when working with small profit margins. Qdinka gives you the <br>options to establish a PassThrough fee structure with your clients.</p>
</div>
<div class="page2">
<img src="images/promoimg5.png">
<h4>Limited Memberships available</h4>
<div class="emailbox1">

<button class="buttonn">Sign-Up</button>
</div>
<br>
<p class="para1">Qdinka is only accepting a limited amount of sellers into the platform for our upcoming launch. Users <br>will gain access to sell on a first come, first serve basis.</p>
</div>

<div class="page3">
<img class="lastimg" src="images/promoimg6.png">
<h1>We are a team of visionary developers with<br> a deep understanding of the online<br> marketplace industry, and a passion to <br>help small business thrive.</h1>
</div>

<footer>
<h2>Happy selling:)</h2>
<ul>
<li><img src="images/promologos/facebook.png"></li>
<li><img src="images/promologos/twitter.png"></li>
<li><img src="images/promologos/google.png"></li>
<li><img src="images/promologos/linkedin.png"></li>
<li><img src="images/promologos/instagram.png"></li>
<li><img src="images/promologos/youtube.png"></li>
</ul>
<p> &copy 2023 by  State Address Inc. Proudly created by Qdinka.com</p>
</footer>
</div>
</body>
</html>