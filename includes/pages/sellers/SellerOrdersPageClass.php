<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class SellerOrdersPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/SellerOrdersLayout.css');

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
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  class="b" href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
            <div class="orders-wrapper-header">
                <h2>Customer Orders - </h2>
                <div class="orders-wrapper-header-detail">
                   View all orders that are are processed through your shop. Here you will find all the information needed from the client in order
				   to process the order and ship!
                </div>    
            </div>
			
			     <div class="orders-content-body">
				 
                     <div class="orders-wrapper">
				 
                        <ul class="duration-nav">
                        <li><a href="#" class="b">New Orders</a></li>
                        <li><a href="#">Shipped Orders</a></li>
                        <li><a href="#">Refunded orders</a></li>
                        <li><a href="#">All orders</a></li>
						 </ul>
		             </div>
					 <p> Orders must be shipped by <span class="strong"> scheduled ship date </span><a class="question-mark-button" href="#">?</a> </p>
					 <br>
      		 	 </div>
				 <br>
				 
			 <div class="seller-order-details">
				 
				 <div class="orders-label">
				 <div class="orders-num" id="order-id"> 1.</div>
				 <div class="orders-label-detail"> Date of sale <br> <div id="date-of-sale">June 13,1015</div> </div>
				 <div class="orders-label-detail"> Total <br> <div id="Total">$80.00</div> </div>
				 <div class="orders-label-detail"> Ship To <br> <div id="Buyer-Name">John Neufer</div> </div>
				 <div class="orders-label-lastdetail"> Order # <span id="Order-no">105-4796240-8130653</span><br>
				 <a href="#">View Order Details</a>
				 </div>
			     
				 </div>
				    <div>
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
                                <div class="shipped-button"><a href="#">Mark as Shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled To Ship: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-buyer"><a href="#">Contact Buyer</a></div>
                            <div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </div>
							</div>
                            <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
							   
							    
							  
                            </div>
							
					 </div>
					 
                    </div>
					</div>
				<p><hr class="dash"/></p>
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
                                <div class="shipped-button"><a href="#">Mark as Shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled To Ship: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-buyer"><a href="#">Contact Buyer</a></div>
                            <div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </div>
							</div>
                            <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
                            </div>
                        </div>
                    </div>
					
					
				
				
				
				</div>	
					
				
					<div class="seller-order-details">
				 
				 <div class="orders-label">
				 <div class="orders-num" id="order-id"> 2.</div>
				 <div class="orders-label-detail"> Date of sale <br> <div id="date-of-sale">July 15,1015</div> </div>
				 <div class="orders-label-detail"> Total <br> <div id="Total">$80.00</div> </div>
				 <div class="orders-label-detail"> Ship To <br> <div id="Buyer-Name">Ricardo Frias</div> </div>
				 <div class="orders-label-lastdetail"> Order # <span id="Order-no">105-4796240-8130653</span><br>
				 <a href="#">View Order Details</a>
				 </div>
			     
				 </div><div class="ordered-detail">
                       
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
                                <div class="shipped-button"><a href="#">Mark as Shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled To Ship: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-buyer"><a href="#">Contact Buyer</a></div>
                            <div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </div>
							</div>
                            <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
                            </div>
                        </div>
                    </div>
					</div>
					
				 
                            
                    
					
					
					
					
					<div class="seller-order-details">
				 
				 <div class="orders-label">
				 <div class="orders-num" id="order-id"> 3.</div>
				 <div class="orders-label-detail"> Date of sale <br> <div id="date-of-sale">June 13,1015</div> </div>
				 <div class="orders-label-detail"> Total <br> <div id="Total">$80.00</div> </div>
				 <div class="orders-label-detail"> Ship To <br> <div id="Buyer-Name">Kendall Holm</div> </div>
				 <div class="orders-label-lastdetail"> Order # <span id="Order-no">105-4796240-8130653</span><br>
				 <a href="#">View Order Details</a>
				 </div>
			     
				 </div>
				 
				 
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
                                <div class="shipped-button"><a href="#">Mark as Shipped</a></div>
                                <div class="issue-refund-button"><a href="#">Issue Refund</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Scheduled To Ship: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-buyer"><a href="#">Contact Buyer</a></div>
                            <div class="temp">
                         <div class="left"> Quantity:<span id="orderedQualityNum">1</span></div>
                         <div class="right"> $<span id="price">600.99</span> </div>
							</div>
                            <div class="payment-confirmation">
                                
                               <a href="#">Payment Confirmed</a> <div class="confirmation-image"><img src="/images/icons/Paymentconfirmed.png"/></div>
                            </div>
                        </div>
                    </div>
					</div>
					
					
				
					<!-- Bottom Paginator-->
			<div class="subview-bottom-paginate-wrapper">
                    <div class="subview-bottom-paginate">
                        <span class="deactivated-link">< previous page </span><span class="active-link">1 2 3</span> . . .
                        <span class="active-link"> next page ></span>
                    </div>
                </div>
					
					</div>
</div>
  
  
  
			 <?php    
    }
    
    protected function side_menu() {
    }   
}