<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class ListingsPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/listingsLayout.css');

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
                    <li class="seller-nav-list"><a  class="b" href="/pages/sellers/ListingsPage.php">Listings</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
              <div class="seller-content-body">
                    <ul class="favorite-item-head">
                    <li class="item-head">Item</li>
                    <li class="price-head">Listed Price</li>
                    <li class="view-head">Views</li>
                    <li class="sales-head">Sales</li>
                    <li class="date-head">Date Posted</li>
                    <li class="active-head">Active</li>
                    </ul>    
               </div>
            
            <div class="favorite-overview-wrapper">
                  <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="Edit Listing" value="Edit Listing" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">00.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">000</span> views
                        </div>
                        <div class="sales">
                            <span class="sales-num">00</span> Sales
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active">Yes</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Sell it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png"></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="deactivate-button"><a href="#">Deactivate</a></span>
                            
                        </div>
 
                    </div>
                </div>
            </div>
			<div class="favorite-overview-wrapper">
                <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="Edit Listing" value="Edit Listing" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">00.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">000</span> views
                        </div>
                        <div class="sales">
                            <span class="sales-num">00</span> Sales
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active">Yes</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Sell it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png"></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="activate-button"><a href="#">Activate</a></span>
                            
                        </div>
 
                    </div>
                </div>
            </div>
			<div class="favorite-overview-wrapper">
                <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="Edit Listing" value="Edit Listing" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">00.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">000</span> views
                        </div>
                        <div class="sales">
                            <span class="sales-num">00</span> Sales
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active">Yes</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Sell it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="deactivate-button"><a href="#">Deactivate</a></span>
                            
                        </div>
 
                    </div>
                </div>
            </div>
            
            </div>
           
			<div class="new-listing-wrapper">
               <div class="new-listing-wrapper-content">
                <h2>Create a New Listing</h2>
                <div class="new-listing-wrapper-content-detail">If you want to make sales, you are going to need to list your product! Follow our listing guide where we show you some of the best ways to present your product and attract more buyers.</div>
                <div class="new-listing-wrapper-content-button">
                    <div class="follow-listing-button"><a href="#">Follow Listing Guide</a></div>                    
                    <div class="post-listing-button"><a href="#">Post a New Listing</a></div>
                </div>
            </div>
            <div class="new-listing-wrapper-image">
                <img src="/images/icons/sale_tag.png" />
            </div>
        </div>
       <!--- Communicate area --->
       <div class="communicate-wrapper">
            <div class="communicate-wrapper-image">
                <img src="/images/icons/communicate.png"/> 
            </div>
            <div class="communicate-wrapper-content">
                <h2>Remember to Communicate</h2>
                <div class="communicate-wrapper-content-detail">Every day a sale is lost due to a serious lack of communication, both from buyer and seller. Continually check your Messages tab to be sure you do not lose any sales.</div>
                <div class="communicate-wrapper-content-button">
                <div class="open-message-button"><a href="#">Open Messages</a></div>
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