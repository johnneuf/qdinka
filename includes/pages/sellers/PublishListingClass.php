<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class PublishListing extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/PublishListingLayout.css');

    }
protected function body() {
?>
        <div class="seller-top-header">
            <h3>Sell unlimited products on the <u>0% structure</u> . Post more, sell more, and make a higher percentage from each sale...
            </h3>
             <div class="upgrade-button">
             <a href="#">Upgrade</a>
             </div>
        </div>
       
        <!-- My seller Account Area -->
        <div class="seller-profile-wrapper">
               <div class="seller-image-wrapper">
                <img src="/images/icons/user.png" />
                </div> 
            <div class="seller-profile-detail-wrapper">
                    <h2>My Products</h2>
                    <div class="sellerName">
                            <span id="sellerAccountName"> </span>Seller Account Name- <span id="sellerCompanyName">Seller Company Name </span>
                            <span><a href="#"> edit</a></span>
                    </div>
                    <div>Total Sales: <span id="totsales">Number</span></div>
                    <div>Listed Products: <span id="ListedProducts">Number</span></div>
                     
            </div>
            <div class="seller-button-wrapper">
                <span class="listing-button"><a href="#">Listing Guide</a></span>
                
            </div>
        </div>
		<div class="listing-details-wrapper">
		
		<div class="menu-wrapper">
		
		<div class="box1"><a href="#" >Create Listing</a></div>
		<div class="box2"><a href="#" >Preview Listing</a></div>
		<div class="box3"><a href="#" class="b">Publish Listing</a></div>
		
		</div>
		
		
		<div class="favorite-overview-wrapper">
                  <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">Save for Later</a></div>
                    <div class="remove-item"><a href="#">Contact Seller</a></div>
                    <div class="favorite-image"><img src="/images/icons/all-products.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    <div class="vender">by Someone</div>
                        <div class="overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                        </div>
						<p>These ear buds are a for perscription use. They prevent your ears from hearing outside noises and simply beep perfection within the musics purpose of...</p>
                    <div >
                        <input type="submit" name="Add to Cart" value="Add to Cart" class="add-to-cart"/>
						<div class="item-price" id="item-price">$15.99</div>
                    </div>
					</div>
					<div class="right-area">
					<div class="right-text">
					<h4>Congratulations!</h4>
			
					<h3>You have just Published your Listing!</h3>
					<h2>You may view your listing <u>here</u></h2>
					</div>
					<div class="right-image">
					<img src="/images/icons/Approved-icon.png"class="approved-image">
					</div>
					</div>
                     
					 
					 
				
				</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				<?php    
    }
    
    protected function side_menu() {
    }   
}
		