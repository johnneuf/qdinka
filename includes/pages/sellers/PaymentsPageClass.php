<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class PaymentsPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/PaymentsLayout.css');

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
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a class="b" href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
			<div class="payment-wrapper-header">
                <h2>Payment Account- </h2>
                <div class="payment-wrapper-header-detail">
                   Deposit funds as your account balance grows. Update banking, and credit card information when needed. View customer transactions, refunds, and deposits. 
                </div>    
            </div>
			<p><hr class="dash"/></p>
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
			
			<div >
			<ul class="nav" >
			<li> Date</li>
			<li> Description</li>
			<li> Amount(USD)</li>
			<li> Fees (USD)</li>
			<li> Net(USD)</li>
			<li> Balance(USD)</li>
			</div>
			
			<div >
			<ul class="transaction">
			<li id="date">July 14, 2015</li>
			<li id="description">Payment for Order #1012732147 (1 item) purchased online by Cheryl Andreoli on Apr 21, 2015</li>
            <li>$<span id="amount">89.98</span></li>
			<li>$<span id="fees">9.00</li>
			<li>$<span id="net">89.98</li>
			<li>$<span id="balance"> 160 </li>
			</ul>
			<hr class="dash"/>
			</div>
			
			<div >
			<ul class="transaction">
			<li id="date">July 14, 2015</li>
			<li id="description">Payment for Order #1012732147 (1 item) purchased online by Cheryl Andreoli on Apr 21, 2015</li>
            <li>$<span id="amount">89.98</span></li>
			<li>$<span id="fees">9.00</li>
			<li>$<span id="net">89.98</li>
			<li>$<span id="balance"> 160 </li>
			</ul>
			<hr class="dash"/>
			</div>
			
			<div >
			<ul class="transaction">
			<li id="date">July 14, 2015</li>
			<li id="description">Payment for Order #1012732147 (1 item) purchased online by Cheryl Andreoli on Apr 21, 2015</li>
            <li>$<span id="amount">89.98</span></li>
			<li>$<span id="fees">9.00</li>
			<li>$<span id="net">89.98</li>
			<li>$<span id="balance"> 160 </li>
			</ul>
			<hr class="dash"/>
			</div>
			
						<div >
			<ul class="transaction">
			<li id="date">July 14, 2015</li>
			<li id="description">Opening Balance </li>
            <li>$<span id="amount">0.00</li>
			<li>$<span id="fees">0.00</li>
			<li>$<span id="net">0.00</li>
			<li>$<span id="balance">00</li>
			</ul>
			<hr class="dash"/>
			</div>
			
						<div >
			<ul class="transaction">
			<li id="date">July 14, 2015</li>
			<li id="description">Funds sent to your bank account</li>
            <li>$<span id="amount">89.98</span></li>
			<li>$<span id="fees">9.00</li>
			<li>$<span id="net">89.98</li>
			<li>$<span id="balance"> 160 </li>
			</ul>
			<hr class="dash"/>
			</div>
			
			<!-- Bottom Paginator-->
			<div class="subview-bottom-paginate-wrapper">
                    <div class="subview-bottom-paginate">
                        <span class="deactivated-link">< previous page </span><span class="active-link">1 2 3</span> . . .
                        <span class="active-link"> next page ></span>
                    </div>
                </div>
			</div>
			
			 <?php    
    }
    
    protected function side_menu() {
    }   
}