<html>
<head>
      <?php include 'mainheader.php';?>
	 </head>
	 <link rel="stylesheet" href="purchase-layout.css" type="text/css"/>
	 <body>
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
	                <label class="block1"> <span>Expiration*</span>
                    <input class="inputclass2" type="text" id="expiration" />
				    </label>
	                <label class="block"> <span> </span><br>
                    <input class="inputclass2" type="text" id=" " />
                    </label>
		            <label class="block2"> <span> CVV </span><br>
                    <input class="inputclass2" type="text" id="cvv" />
                    </label>
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
                   <div class="products">Products</div>
                   <div class="quantity">Qty.</div>		
                   <div class="price">Price</div>
	               <div class="subtotal">Subtotal</div>
                   </div>
		
	              <div class="row">	  
	              <div class="products" id="product1">Head Phones</div>
                  <div class="quantity" id="quantity1">1</div>		
                  <div class="price"    id="price1">$15.95</div>
	              <div class="subtotal" id="subtotal1">$15.95</div>
                  </div>
     
    	          <div class="row">	  
		          <div class="products" id="product2">8GB Hard Drive</div>
                  <div class="quantity" id="quantity2">1</div>		
                  <div class="price" id="price2">$59.95</div>
	              <div class="subtotal" id="subtotal2">$59.95</div>
                  </div>
	   
	              <div class="row2">	  
		          <div class="total">SubTotal</div>
                  <div class="total-value" id="total-value">$75.90</div>
                  </div>
				  
	              <div class="row2">	  
		          <div class="total">Tax</div>
                  <div class="total-value" id="tax">$0.00</div>
                   </div>
	   
	              <div class="row2">	  
		          <div class="total">Shipping</div>
                  <div class="total-value" id="shipping-cost">$0.00</div>
                  </div>
	  
            	  <div class="row2">	  
		          <div class="total">Total</div>
                  <div class="total-value" id="total">$75.90</div>
                  </div>
	   
                  <br>
                  <div class="delivery-date">
                  Estimated Delivery date:<span id="delivery-date-from">06/09/15</span>-<span id="delivery-ddate-2">06/15/15</span>
                  </div>
                  
				  <div>
                  <a href="" class="place-order-button">Place Order</a>
                  </div>
	 
	 
	        </div>
	 </div>
	 
			
			     </body>
	
	            <div class="footer"><?php include 'mainfooter.php';?></div>
	   
	   
	            </html>