<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class MessageOpened extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/MessageOpenedLayout.css');

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
                    <li class="seller-nav-list"><a class="b" href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
			
			<div class="message-wrapper-header">
                <h2>Message Manager </h2>
              
				<div class="createbutton"><a href="" class="create-button">Create New</a></div>
            </div>
			
			 <div class="wrapper">
                <div class="side-bar">
				<div class="message-button"> <a href="" class="send-message-button">Send Message</a> </div>
				<ul class="list">
				<li><a href="">Messages(<span id="messages">16</span>) </a></li>
                 <li><a href="">sent(<span id="sent-messages">5</span>) </a></li>
                  <li><a href=""><img src="">Archieve</a></li>
				  <li>Trash</li>
				</ul>
				<div class="search-bar-wrapper">
            <form action="" method="post">
            <input type="text" name="txtSearch" placeholder="Search  ..."/>
            <input type="image" name="btnSubmit" src="/images/icons/search.png" />
            </form>
             </div>
             
            
										  
										  
                                       </div>
		<div class="messages">
            <div class="message-content-header-wrapper">
                <ul class="message-nav">
                    
                    <li class="message-nav-list"><img src="/images/icons/Archieve.png"/>Archieve</li>
                    <li class="message-nav-list"><img src="/images/icons/Trash.png">Trash</li>
                     <li class="message-nav-list"><img src="/images/icons/Report-spam.png">Report Spam</li>
                    
                </ul>
            </div>

			<div class="message-wrapper">
                <div class="seller-image-wrapper">
                <img src="/images/icons/user.png" />
                 </div> 
			         <div class="seller-profile-detail-wrapper">
                   
                       <div class="sellerName">
                        <span id="sellerAccountName">Seller Account Name- </span> <span id="sellerCompanyName">Seller Company Name </span>
                        
                         </div>
                    <div class="totsales">Total Sales: <span id="totsales">Number</span></div>
                    <div class="ListedProducts">Listed Products: <span id="ListedProducts">Number</span></div>
                    <a href="">Drop Shippping Your Product </a>
					<p><hr class="dash"></p>
					 </div>
			<div class="date">
		<span id="date">June08,2015</span> 
	       </div>
</div>
<div class="seller-message">
 Hi, 

 I hope you are doing great.<br> 

 It is unbelievable that 61% of the population of the earth changes their mind about the mobile brand on the basis of <br>
 applications and their quality accessibility. <br>

 The vigorous developments in mobile applications have changed the whole concept of digital world. <br>

 We offer affordable and top quality mobile application development services to our clients all over the UK. We offer:- 

</div>

<div class="submit-button">
    
    <textarea name="" id="txt" ></textarea>
    
    <div class="button"><a href="">Send Message</a></div>
</div>

        </div>
		
		</div>
		</div>
		
		<div class="sale-statistics-wrapper">
		
		        <div class="statistic-image-wrapper">
                <img src="/images/icons/Statistics-img.jpg" />
                 </div> 
			         <div class="stat-detail-wrapper">
                        <h2>Your Sales Statistics </h2> 
						<p>Track the sales and statistics for each respective product. Monitor both the velocity of your products,
						and geographic location in order to map the best sales campaign for each individual product. </p>
						<a href="" class="track-button">Track Sales Progress</a>
                         </div>
		</div>
		<?php    
    }
    
    protected function side_menu() {
    }   
}