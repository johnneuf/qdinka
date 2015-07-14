<?php 
/**
*Ricardo Frias
* Created on 7/9/15 6:13pm
* @email ricardoffrias@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class CheckoutPage extends TemplateBase {
	function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/layout.css');
		  $this->add_css('/stylesheets/CheckoutLayouts.css');
    }

    protected function body()
    {
        ?>
			
<div class="checkout-page-section-wrapper">
           
			<div class="checkout-card-wrapper">
                    <div class="checkout-card-content-wrapper">
                      	<div class="ShoppingCart">
                        		Shopping Cart
                        </div>
                        <div class="MiddleDiv">
                            <form action= "" method="get">
  										First name* <input type="text" name="fname"><br>
  										Last name* <input type="text" name="lname"><br>
                              Address* <input type="text" name="fname"><br>
                              Address (contd.) <input type="text" name="fname"><br>
                              City* <input type="text" name="fname"><br>
                              State* <input type="text" name="fname"><br>
                              Zip* <input type="text" name="fname"><br>
                              Country* <input type="text" name="fname"><br>
                              Enter gift message below <input type="text" name="fname"><br>
                              
  										<input type="submit" value="Continue">
									 </form>                        
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Contact Seller</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
         </div>	
                            
			<div class="checkout-card-wrapper">
                    <div class="checkout-card-content-wrapper">
                      	<div class="save">
                        		Save for later
                         <span class = "remove"> Remove Item </span>
                        </div>
                        <div class="">
                            
                            <div class="ProductName">
                              Product Name
                            </div>
                            <div class="QuantityColorSize">Quantity: <br/>Color: <br/>Size: <br/></div>  
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Contact Seller</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
         </div>	
                            
			<div class="checkout-card-wrapper">
                    <div class="checkout-card-content-wrapper">
                      	<div class="save">
                        		Save for later
                         <span class = "remove"> Remove Item </span>
                        </div>
                        <div class="">
                            <div class="ProductName">
                              Product Name
                            </div>
                            <div class="QuantityColorSize">Quantity: <br/>Color: <br/>Size: <br/></div>  
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Contact Seller</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
         </div>	                    
			
</div>



<?php
}

protected function side_menu() {

}
}