<?php
namespace includes\pages\sellers;

use includes\template\TemplateBase;

class ManageAccount extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/ManageAccountLayout.css');

    }
protected function body() {
?>
        <!--- seller Header area --->
        <?php include 'SellerContentHead.php'; ?>
            <!--- seller Body area --->
            
            <!-- My seller Content area -->
        <div class="seller-content-wrapper">
            <div class="seller-content-header-wrapper">
                <ul class="seller-nav">
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerHome.php">Home</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/ListingsPage.php">Listings</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a class="b" href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
    
  <!--- seller Body area --->
            <div class="seller-content-menu-wrapper">
                <h2>Manage Account </h2>
                <div class="seller-content-menu-detail">
                   Update bank, and billing info. Upgrade your Seller Account and make a higher commision per sale. Calculate your return on investment to be sure it makes sense for you.
                </div> 
                			</div>
							<hr class="dash"/>
			<div class="profile-type">
			<div class="h3">You are currently using the <u>Standard </u>seller profile</div>
			<div class="container">
			<div class="box">
			   <div class="type-header">Standard</div>
			   Post Up-To<br>
			  <h4> 15 Listings/Month</h4>
			  <hr class="dash"/>
			  Commission Fee<br>
			  <h4>10% Per Sale</h4>
			  <hr class="dash"/>
			  Referal id's:<br>
			  <h4>5 Per Month</h4>
			 <hr class="dash"/> 
			 <div class="free">Free</div>
			   </div>
			
			
			
			
			<div class="box">
			<div class="type-header">Executive</div>
			Post Up-To<br>
			  <h4> 30 Listings/Month</h4>
			  <hr class="dash"/>
			  Commission Fee<br>
			  <h4>5% Per Sale</h4>
			  <hr class="dash"/>
			  Referal id's:<br>
			  <h4>20 Per Month</h4>
			 <hr class="dash"/> 
			  Marketing Tab:<br>
			  <h4>Unlocked</h4>
			 <hr class="dash"/> 
			 <div class="free">$14.95/month</div>
			</div>
			
			
			
			<div class="box">
			<div class="type-header">Professional</div>
			
			Post Up-To<br>
			  <h4>Unlimited Listings</h4>
			  <hr class="dash"/>
			  Commission Fee<br>
			  <h4>0% Per Sale</h4>
			  <hr class="dash"/>
			  Referal id's:<br>
			  <h4>Unlimited</h4>
			 <hr class="dash"/> 
			  Marketing Tab:<br>
			  <h4>Unlocked For Life</h4>
			 <hr class="dash"/> 
			 <div class="free">$49.95/month</div>
			
			</div>
			
			
			</div>
			<hr class="dash"/>
			<div class="h3">Accepting Payments</div>
			
			<div class="payment-wrapper">
			     <div class="current-balance-wrapper">
			     <div class="header">Current Balance</div>
			     <div class="balance-amount">$<span id="currentbalance">160.00</span>USD</div>
			     <div class="deposit-button"><a href="">Deposit</a></div> 
			     </div>
			
			
			<div class="bank-account-wrapper">
			
			<div class="header">Bank Account <a class="question-mark-button" href="#">?</a> </div>

			<div class="Account-info"> Checking Account Ending in <span id="Account-no">0971</span></div>
			<div class="Update"><a href>Update</a></div>
			</div>
			
			<div class="billing-info-wrapper">
			<div class="billing-info-wrapper-header">Billing Info <a class="question-mark-button" href="#">?</a> </div>
			<div class="card-info">Credit Card Ending in <span id="credit-card-expiry">9831</span></div>
			<div class="Update"><a href>Update</a></div>
			</div>
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
  
    <?php    
    }
    
    protected function side_menu() {
    }   
}