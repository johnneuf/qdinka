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
  						
        	<div class = "checkout-card-wrapper">
                  <div class="OrderDetails">
                      Order details
                  </div>
             </div>  			
                              
         <div class = "checkout-card-wrapper">      
  						<div class="ExpressCheckout">
                      Express Checkout
                  </div>
         </div>                     
  			<div class = "checkout-card-wrapper">
  						<div class="ShoppingCart">
                      Shopping Cart
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
			
                            
			<div class="checkout-card-wrapper"> 
           			<div class="checkout-card-content-wrapper">
                        <div class="MiddleDiv">
                          		<div class ="TopOfDiv">
                        			STEP 1. <span style = "color: #1C75BD"> Shipping Details </span>
                       			 </div><br> 
                            <form action= "" method="get">
                             		<div style = "width: 96.5%">
                              	<div style = "width: 45%; float: left">
        										First Name*
        										<input  name="first_name" type="text" />
        									</div>
                                 <div style = "width: 45%; float: right">   
                                    Last Name*
        										<input  name="last_name" type="text" />
											</div>
											</div>
                              Address* <br> <input type="text" name="address"><br>
                              Address (contd.) <br> <input type="text" name="addcont"><br>
                              City* <br> <input type="text" name="city"><br>
                              State* <br> <input type="text" name="state"><br>
                              Zip* <br> <input type="text" name="zip"><br>
                              Country* <br> <input type="text" name="country"><br>
                              Enter gift message below <br>
                              <input type = "text" placeholder = " Recipient" name = "recipient"/>
  										<input type = "text" placeholder = " From" name = "from"/>
                                
                              <textarea name="Enter" placeholder = "Enter message here..."></textarea> 
                                <br>
                              <input type="submit" value="Continue">
                             
									 </form>                        
                        </div>
                        	
                    </div>
         </div>	                            
                            
                            
</div>


<?php
}

protected function side_menu() {

}
}