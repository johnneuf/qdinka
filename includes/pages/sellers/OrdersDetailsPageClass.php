<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class OrdersDetailsPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/OrderDetailsLayout.css');

    }
protected function body() {
?>
        <!--- seller Header area --->
        <?php include 'SellerContentHead.php'; ?>
		
		 <!---seller Body area --->
            <div class="seller-content-wrapper">
            <div class="seller-content-header-wrapper">
                <ul class="seller-nav">
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerHome.php">Home</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/ListingsPage.php">Listings</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  class="b" href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
			<div class="orders-wrapper">
				 
                        <ul class="nav">
                        <li><a href="#" >Orders ></a></li>
                        <li><a href="#"class="b">Order details</a></li>
						</ul>
						</div>
						
						
			<div class="order-list-header">
                        <div class="date"><h2>Order Reciept</h2>
                           Order Date <br/><span id="orderedDate"> September 8th, 2015</span>
                        </div>
                  
                        <div class="orderNumber"><h2>Print Page</h2>
						   <a href="#">Order Number</a> <br/>
                            Order # <span id="orderedNum">105-4796240-8130653</span>
                        </div>
						
			</div>
			
			<div class="order">
           			
					<div class="order-summary-header">
					   <p><hr class="dash" /></p>
                        <div class="ordered-address">
                          <h4>Shipping Address</h4><span id="shipping-address"> John Neufer<br>General Delivery<br>Sekiu,WA 98381-9999<br>United States</span>
                        </div>
                  
                        <div class="payment-method">
						  <h4> Payment Method</h4> <span id="visa-number">VISA ****9892</span>
                        </div>
						<div class="order-summary"> <h4>Order Summary</h4>
						<div class="order-price">Items Subtotal:<span id="subtotal">$1088.08</span></div>
						<div class="order-price">Shipping & handling:<span id="shipping-handling">$$7.18</span></div>
						<div class="order-price">Total Before Tax:<span id="total-before-tax">$1095.27</span></div>
						<div class="order-price" >Estimated Tax:<span id="estimated-tax">$0.00</span></div>
						<div class="order-price" >Grand Total:<span id="grand-total">$1095.27</span></div>
						</div>
						
					</div>
					<p><hr class="dash" /></p>
					
					<div class="ordered-detail">
                       
                        <div class="ordered-image">
                            <img src="/images/icons/all-products.png" />
                        </div>
                        <div class="ordered-list-1">
                            <div class="ordered-name">
                                Pink Ear Buds - Wireless Ipod - Heavy duty waterproof item - Womens Sports 
                            </div>
                            <div class="seller">Sold By <span id="sellerName">Pixystick101</span></div>
                            <div class="condition">Condition: <span id="conditionStatus">New</span></div>
                            <div class="ordered-button-1">
                                <div class="shipped-button"><a href="#">Mark As shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled Delivery: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-seller"><a href="#">Contact Buyer</a></div>
                            <div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </div>
							</div>
                            <div class="ordered-button-2">
                                
                                <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
                            </div>
                            </div>
					 </div>
                    </div>
					<p><hr class="dash" /></p>
					
					 <div class="ordered-detail2">
                        
                        <div class="ordered-image">
                            <img src="/images/icons/all-products.png" />
                        </div>
                        <div class="ordered-list-1">
                            <div class="ordered-name">
                                Nokia Camera - 1000909 - 10 lenses with Black rim -All in on Video Camera
                            </div>
                            <div class="seller">Sold By <span id="sellerName">Pixystick101</span></div>
                            <div class="condition">Condition: <span id="conditionStatus">New</span></div>
                            <div class="ordered-button-1">
                                <div class="shipped-button"><a href="#">Mark As Shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled Delivery: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-seller"><a href="#">Contact Buyer</a></div> <br>
							<div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </p></div>
							</div>
                            <div class="ordered-button-2">
                                
                                <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
                            </div>
                            </div>
                        </div>
						
			</div>
					
					
					
			</div>
			</div>
			
			 <?php    
    }
    
    protected function side_menu() {
    }   
}
			
			
			