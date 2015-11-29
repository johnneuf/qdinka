<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class SellerProfileHomePage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/sellerHomeLayout.css');

    }
protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'SellerContentHead.php'; ?>
            <!--- Buyer Body area --->
            
            <!-- My seller Content area -->
        <div class="seller-content-wrapper">
            <div class="seller-content-header-wrapper">
                <ul class="seller-nav">
                    <li class="seller-nav-list"><a  class="b" href="/pages/sellers/SellerHome.php">Home</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/ListingsPage.php">Listings</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
    
  <!--- seller Body area --->
            <div class="seller-content-menu-wrapper">
                <h2>Getting Started - </h2>
                <div class="seller-content-menu-detail">
                   Welcome to the best seller platform available. Manage your listings, message buyers, fulfill orders, deposit funds, and market your products.
                </div>    
            </div>
			
			<div class="seller-content-body">
			
            <div class="seller-home-nav-image"><img src="/images/icons/home.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Listings</h2></a>
            <div class="seller-home-nav-detail">Post, Monitor, and Edit listings through your Listing tab  - <span class="activity"><a href="#">Create a listing</a></span></div>
            </div>
			</div>
			
			
			<div class="seller-content-body">
			<p><hr class="dash"/></p>
            <div class="seller-home-nav-image"><img src="/images/icons/envelope.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Messages</h2></a>
            <div class="seller-home-nav-detail">Message with other Buyers/Sellers through your message tab  - <span class="activity"><a href="#">Check Inbox</a></span></div>
            </div>
			</div>
			
           
			<div class="seller-content-body">
			<p><hr class="dash"/></p>
			
            <div class="seller-home-nav-image"><img src="/images/icons/home.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Orders</h2></a>
            <div class="seller-home-nav-detail">View and manage your orders through the orders tab  - <span class="activity"><a href="#">View Sales Stats</a></span></div>
            </div>
			</div>
			
		
			<div class="seller-content-body">
			<p><hr class="dash"/></p>
            <div class="seller-home-nav-image"><img src="/images/icons/home.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Payments</h2></a>
            <div class="seller-home-nav-detail">Manage your payments and deposit funds into your bank account  - <span class="activity"><a href="#">Start Transferring</a></span></div>
            </div>
			</div>
			
			
			<div class="seller-content-body">
			
			<p><hr class="dash"/></p>
            <div class="seller-home-nav-image"><img src="/images/icons/home.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Marketing</h2></a>
            <div class="seller-home-nav-detail">Share your product on all the major social media platforms  - <span class="activity"><a href="#">Market your Products</a></span></div>
            </div>
			</div>
			
			<div class="seller-content-body">
			<p><hr class="dash"/></p>
            <div class="seller-home-nav-image"><img src="/images/icons/home.png" /></div>
			<div class="seller-home-nav-title"><a href="/pages/buyers/myOrders.php"><h2>Upgrade Account</h2></a>
            <div class="seller-home-nav-detail">Manage, upgrade, and change account information  - <span class="activity"><a href="#">Set-Up-Account</a></span></div>
            </div>
			</div>
			
			
            
        </div>
		
		
		
                        
        <!--- Start Selling area --->
        <div class="seller-sell-wrapper">
            <h2>Create Your Listing</h2>
            <div class="seller-sell-wrapper-detail">Qdinka has created the best platform where young inventors and veteran entrepreneurs alike can come  to buy and sell new technologies, risk free - we handle the processing</div>
            <div class="seller-sell-wrapper-button">
                <span class="listing-button"><a href="#">Post Listing</a></span>
                <span class="listing-guide-button"><a href="#">Listing Guide</a></span>
            </div>
        </div>
					
					

</div>
   </div>
  
    <?php    
    }
    
    protected function side_menu() {
    }   
}