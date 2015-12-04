<?php
namespace includes\pages\CartPage;

use includes\template\TemplateBase;

class Purchase extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/purchaselayout.css');

    }
	protected function body() {
?>
	 <div class="header-wrapper">
	 <h3>Sell unlimited products on the only available <u> 0% commision</u> platform around. Post more, sell more, and make a higher percentage per sale...</h3>
	 </div>
	 <div class="checkout-wrapper">
	                <div class="menu-wrapper">
					<div class="box1"><a href="#">Shopping Cart</a></div>
					<div class="box2"><a class="b"href="#">Express Checkout</a></div>
					<div class="box3"><a href="#">Order Summary</a></div>
	                </div>
					 
			        <div class="shipping-details">	
                    <form  >
                    <h2><span class="color">Step1.</span><span class="colorheader">Shipping Details</span></h2>
	                
					<label> <span>First Name</span>
                    <input class="inputclass"type="text" id="firstname" />
                    </label>
					
                    <label> <span>Last Name</span>
                    <input class="inputclass" type="text" id="lastname" />
                    </label>
		            <br>
		
		            <label class="left"> Address*</label>
                    <input class="inputbox" type="text" name="Address" id="Address"/>
		            <br>
		
                    <label class="left">City*</label>
                    <input class="inputbox"  type="text" name="city" id="city"/>
		
		            <label class="state"> <span>State</span>
                    <input class="inputclass" type="text" id="state" />
                    </label>
					
                    <label class="zipcode"> <span>Zipcode</span>
                    <input class="inputclass" type="text" id="zipcode" />
                    </label>
					
		            <label class="left">Country*</label>
                    <input class="inputbox" type="text" id="country"/>
		            <br>
					
		            <div class="message">
		            <label> Enter message:</label>
		            <input class="inputbox1" type="text" name="recipient" placeholder="Recipient">
		            <br>
		            <br>
		            <input class="inputbox" type="text" name="from" placeholder="From">
		            <br>
	                <textarea class="textarea" placeholder="Enter Message here..."></textarea>
		            
					</div>
		            </form>
		            <div>
		            <a href="" class="button">Continue</a>
		            </div>
					
                    </div>	

                    <div class="payment-wrapper">
                    <h2><span class="color">Step2.</span><span class="colorheader">Payment details</span></h2>
	                
					<form>
	                <label class="card-name">Name on Card*:</label>
	                <input class="inputbox" type="text" id="name-on-card"/><br>
	                <div class="block">
	                <label class="card-no">Number on Front of Card*</label>
	                <input class="inputbox" type="text" id="card-no"/>
	                </div>
					<div class="exp">
	                <label class="block1"> <span>Expiration*</span>
                    <input class="inputclass2" type="text" id="expiration" />
				    </label>
	                <label class="block"> <span> </span><br>
                    <input class="inputclass2" type="text" id=" " />
                    </label>
					</div>
					<div class="cvvclass">
		            <label class="block2"> <span> CVV </span><br>
                    <input class="inputclass2" type="text" id="cvv" />
                    </label>
					</div>
					
		            </form>
		            <br>
	     
                    <p><input type="checkbox" class="checkbox">shipping is my billing address.</p>
		            <div class="continue-button">
		            <a href="">Continue</a>
		            </div>
	                </div>
	 
	               <div class="order-summary-wrapper">
	               <h2><span class="color">Step3.</span><span class="colorheader">Confirm Order</span></h2>
				   
				   
			      <div class="table" >
                   <div class="tablehead">
                   <div class="products-header">Products</div>
                   <div class="quantity-header">Qty.</div>		
                   <div class="price-header">Price</div>
	               <div class="subtotal-header">Subtotal</div>
                   </div>
				   
				   
				   
				   <div class="row">
                   <div class="products">Head Phones</div>
                   <div class="quantity">1</div>		
                   <div class="price">$15.95</div>
	               <div class="subtotal">$15.95</div>
                   </div>
				   
				   <div class="row">
                   <div class="products">8GB Hard drive</div>
                   <div class="quantity">1</div>		
                   <div class="price">$59.95</div>
	               <div class="subtotal">$59.95</div>
                   </div>
				   
				   <div class="row">
                   <div class="sub-total">SubTotal</div>
                   <div class="quantity"></div>		
                   <div class="price"></div>
	               <div class="subtotal-amount">$75.90</div>
                   </div>
				   
				   <div class="row">
                   <div class="Tax">Tax</div>
                   <div class="quantity"></div>		
                   <div class="price"></div>
	               <div class="Tax-amount">$00</div>
                   </div>
				   
				   <div class="row">
                   <div class="shipping">Shipping</div>
                   <div class="quantity"></div>		
                   <div class="price"></div>
	               <div class="shipping-amount">$00</div>
                   </div>
				   <br>
                  <div class="delivery-date">
                  Estimated Delivery date:<span id="delivery-date-from">06/09/15</span>-<span id="delivery-date-to">06/15/15</span>
                  </div>
                  
				  <div>
                  <a href="" class="place-order-button">Place Order</a>
                  </div>
	 
				   
                  </div>				   
				  
			

	 </div>
	 
			
			     
	<?php    
    }
    
    protected function side_menu() {
    }   
}