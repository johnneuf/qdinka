<?php
namespace includes\pages\sellers;

use includes\template\TemplateBase;

class marketingPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/marketingLayout.css');

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
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerHome.php">Home</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/ListingsPage.php">Listings</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerMessages.php">Messages</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/SellerOrders.php">Orders</a></li>
                    <li class="seller-nav-list"><a  href="/pages/sellers/Payments.php">Payments</a></li>
                    <li class="seller-nav-list"><a class="b" href="/pages/sellers/Marketing.php">Marketing</a></li>
					<li class="seller-nav-list"><a  href="/pages/sellers/SellerManageAccount.php">Manage Account</a></li>
                </ul>
            </div>
			<div class="marketing-header">
			<h2>Product Marketing -</h2>
			<div class="text-header">
			Use the quick to share buttons to get your product on all of the major social media outlets. Follow the marketing training videos for better results. </div>
			</div>
			
			<div class="favorite-overview-wrapper">
                  <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="active-button"><a href="#">Active</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-wrapper-bottom" id="items-sold">24 sold</div>
				    
                        </div>
			 <div class="favorite-item-detail">
                   <h4> Share your products on all the major social media websites!</h4>
				 <label> Title: <input type="text" class="input"> </label> <div class="button"><a href="">Update</a></div>
				 <br>
                  <label> Description:<input type="text" class="inputbox"> </label>
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom" >
                            
                            <ul class="marketplace-link">
                                    <li class="logo-facebook"><a href="#"><img src="/images/social_media/facebook-image.png"></a></li>
                                    <li class="logo-pinterest"><a href="#"><img src="/images/social_media/pinterest-icon.png"></a></li>
                                    <li class="logo-linkedin"><a href="#"><img src="/images/social_media/linkedin-image.png"></a></li>
                                    <li class="logo-twitter"><a href="#"><img src="/images/social_media/twitter-image.png"></a></li>
                                    
                            </ul>
                        </div>
						</div>
						</div>
			<hr class="dash">
			
			
			<div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="active-button"><a href="#">Active</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-wrapper-bottom" id="items-sold">8 sold</div>
				    
                        </div>
			 <div class="favorite-item-detail">
                   <h4> Share your products on all the major social media websites!</h4>
				 <label>Title:<div class="title">Better then Dre-beats Headphones!</div></label> <div class="edit-default-button"><a href="">Edit Default</a></div>
				 <br>
                  <label>Description:<div class="discription">Built from entirely recycled and organic materal, these headphones kick ass! Every purchase plants 5 trees! Hello?! Talk about going Green!</div></label>
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom" >
                            
                            <ul class="marketplace-link">
                                    <li class="logo-facebook"><a href="#"><img src="/images/social_media/facebook-image.png"></a></li>
                                    <li class="logo-pinterest"><a href="#"><img src="/images/social_media/pinterest-icon.png"></a></li>
                                    <li class="logo-linkedin"><a href="#"><img src="/images/social_media/linkedin-image.png"></a></li>
                                    <li class="logo-twitter"><a href="#"><img src="/images/social_media/twitter-image.png"></a></li>
                                    
                            </ul>
                        </div>
						</div>
						</div>
					<hr class="dash">
					<div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="inactive-button"><a href="#">Inactive</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    
                    <div class="favorite-wrapper-bottom" id="items-sold">15 sold</div>
				    
                        </div>
			 <div class="favorite-item-detail">
                   <h4> Share your products on all the major social media websites!</h4>
				 <label> Title: <input type="text" class="input"> </label> <div class="button"><a href="">Update</a></div>
				 <br>
                  <label> Description:<input type="text" class="inputbox"> </label>
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom" >
                            
                            <ul class="marketplace-link">
                                    <li class="logo-facebook"><a href="#"><img src="/images/social_media/facebook-image.png"></a></li>
                                    <li class="logo-pinterest"><a href="#"><img src="/images/social_media/pinterest-icon.png"></a></li>
                                    <li class="logo-linkedin"><a href="#"><img src="/images/social_media/linkedin-image.png"></a></li>
                                    <li class="logo-twitter"><a href="#"><img src="/images/social_media/twitter-image.png"></a></li>
                                    
                            </ul>
                        </div>
						</div>
						
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
			
			 <?php    
    }
    
    protected function side_menu() {
    }   
}
			