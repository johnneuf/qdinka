<?php
namespace includes\pages\MyAccount;

use includes\template\TemplateBase;

class MyAccountPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/MyAccountLayout.css');

    }
protected function body() {
?>
        <div class="buyer-top-header">
            <h3>Sell unlimited products on the <u>0% structure</u> . Post more, sell more, and make a higher percentage from each sale...
            </h3>
             <div class="upgrade-button">
             <a href="#">Upgrade</a>
             </div>
        </div>
        <div class ="buyer-profile-wrapper">
             <div class="buyer-image-wrapper">
             <img src="/images/icons/user.png"/>
             </div>
   
          <div class="buyer-profile-detail-wrapper">
           <h2>My Account</h2>
                  <div class="buyername">
			      <span id="buyerAccountName"> Buyer Account Name</span> - <span id="buyerCompanyName">Buyer Comapany Name </span>
				  <span><a href="#">edit</a></span>                   
				  </div>
                    <div>Reviews: <span id="Reviews">Number</span></div>
                    <div>Sales: <span id="Sales">Number</span></div>
                     
           </div>
            <div class="buyer-button-wrapper">

                <span class="shop-button"><a href="#">Shop</a></span>
                <span class="listing-button"><a href="#">Post Listing</a></span>
                
            </div>
        </div>

        <div class="welcome-area">
	<p class="split-para">Welcome to My Account- <span>Go to your respective profile to manage either your purchases, or your sales.
	Have fun experiencing the simplicity of the Qdinka marketplace!</span></p>
		
		<br/>
		<hr>
		<div class="buyer-profile-image">
		<img src="/images/icons/user.png"/>
		</div>
		<div class="seller-profile-image">
		<img src="/images/icons/user.png"/>
		</div>
    
	 </div>
	 
	 <div class="listing-area">
	   <h3 class="split-para"> Create Your Listing</h3>
	 <p>Qdinka has created the best platform where young inventors and veteran entrepreneurs alike can come  to buy and sell 
	 new technologies, risk free - we handle the processing</p>
	 
	 
	 
	 <a href="" class="welcome-area-listing-button">Post Listing</a>
	 
	 
	 </div>
 <div>        
			
			
        </div>
  
    <?php    
    }
    
    protected function side_menu() {
    }   
}