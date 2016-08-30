<?php


namespace includes\pages\Loginpage;

use includes\database\DatabaseUtil;
use includes\template\TemplateBase;


class loginpage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/login.css');
		//js
       $this->add_js('/javascript/angular.min.js');
    }
protected function body() {
?>
	     <!--selling area -->
		 <div>
	     <div class="selling-wrapper">
         <h3>Start Selling Today</h3>
	     </div>
		 
		 <!--registration-header-->
	    <div class="registration-header-wrapper">
		 <h3> Sell unlimited products on the<u> 0% structure .</u> Post more, sell more, and make a higher percentage from each sale...</h3>
	     </div>
		 
         </div>
		 <div ng-app="" class="container" >
            <div class="left-col">
	           <div class ="products-wrapper">
	<a href="">All Products</a> 
    <hr>
	<a href="">Accesories</a>
	<hr>
	<a href="">Apparel</a>
	<hr>
	<a href="">Camera</a> 
	<hr>
	<a href="">Film/Video</a>
	<hr/>
	<a href="">Game</a>
	<hr>
	<a href="">Home Living</a>
	<hr/>
	<a href=""> Misc.Tech </a>
	<hr/>
	<a href=""> Out-Doors </a>
	<hr/>
	<a href=""> Phone/Tablets </a>
	<hr/>
	<a href=""> Sports </a>
	</div>
	<div class="contributors">
	<div><a href="#" class="contributors-button" >Top-Contributors</a></div>
	<h3>Updated weekly</h3>
	<hr/>
	<a href="">Company name</a><br>
	<a class="new-products" href="">New Products</a> <hr/>
	<a href="">Company name</a><br>
	<a class="new-products" href="">New Products</a>
	</div>
	
	

	</div>
	
	<?php
if(isset($_POST['submit'])){

	
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Username=$_POST['Username'];
	
	
	
}
	?>
	
                  
					 <div class ="register-wrapper">
	   
	<form class="form" name="form" method="POST" action="LogIn.php">
	<h1>Register</h1>
	<hr/>
	
	<label>First name</label>
     <input class="inputbox" type="text" name="FirstName" ng-model="FirstName" required>
     <p ng-show="form.FirstName.$touched && form.FirstName.$invalid"> FirstName is required.</p>
        <label>Last name</label>
        <input class="inputbox"  type="text" name="LastName" ng-model="LastName" required>
		<p ng-show="form.LastName.$touched && form.LastName.$invalid"> LastName is required.</p>
		<label> Email</label>
        <input class="inputbox" type="email" name="Email" ng-model="Email" required>
       <p ng-show="form.Email.$touched && form.Email.$invalid">Invalid Email .</p>
         <label>Password</label>
        <input class="inputbox"  type="password" name="Password" ng-model="Password" required>
		<p ng-show="form.Password.$touched && form.Password.$invalid"> Invalid Password</p>
		 <label>Confirm Password</label>
        <input class="inputbox"  type="password" name="Confirm Password">
		
		<label>Username</label>
        <input class="inputbox" type="username" name="Username" ng-model="Username" ng-minlength="5" ng-maxlength="20" ng-pattern="/^[a-zA-Z0-9]{4,10}$/" required }"
      autofocus> 
		 <p  ng-show="form.Username.$dirty && form.Username.$invalid">Error:
        

		<p ng-if="form.Username.$touched && form.Username.$invalid || form.Username.$error.pattern">Username pattern is invalid</p>
		<p ng-if="form.Username.$error.minlength">Must be more than 5 characters.</p>
         <p ng-if="form.Username.$error.maxlength">Must be less than 20 characters.</p>
		 
		<br>
		
		 <div>
        <label><input class="checkbox" type="checkbox" value="yes" name="RecieveEmails" />I want to recieve emails on Qdinka news and recently added product. </label>
        </div>
	    <input class="button" type="submit" name="submit" value="submit"><br>
		By registering, you confirm that you accept our<u> Terms of Use </u>and <u>Privacy Policy.</u>
	
	</form>
	 
	            </div>
	   
	   
	   <!--log-in area-->
    <div class="log-in-wrapper">
	<form class="log-in-form-wrapper" method="POST" action="">
		 <h1>Log-in</h1>
		 <hr/>
		 <label>Username<br></label>
         <input class="inputbox" type=""text" name="username" ng-model="username">
         <br>
         <label>Password<br></label>
         <input class="inputbox" type="text" name="last name">
		 <br>
	    <div>
        <label><input class="checkbox" type="checkbox" /> Stay signed in.</label><br>
        </div>
		<input class="button" type="Submit" name="Log-in"><br>
		</form>
		<label><a href="">Forgot your Password?</a></label>
		<label><a href="">Forgot your username or Email?</a></label>
		<label><a href="">Want to reopen your account?</a></label>
		</div>
		
	</div>
		
	   <?php    
    }
    
    protected function side_menu() {
    }   
}
