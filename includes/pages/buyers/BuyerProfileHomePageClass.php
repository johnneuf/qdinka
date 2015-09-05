<?php
/**
* Nannalin Higgins
* Created on 8/29/2015 at 4:50 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerProfileHomePage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-wrapper">
                <h2>Getting Started - </h2>
                <div class="buyer-content-menu-detail">
                    Welcome to the best seller platform available. Manage your listings, message buyers, fufill orders, deposit funds, and market your products.
                </div>    
            </div>

            <div class="buyer-content-body">
                <ul class="buyer-home-nav">
                    <li>
                        <div class="buyer-home-nav-image"><img src="/images/icons/all-products.png" /></div>
                        <div class="buyer-home-nav-title"><a href="#"><h2>My Orders</h2></a>
                            <div class="buyer-home-nav-detail">View your current, pending, and previous orders and their status - <span class="activity"><a href="#">My Orders</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="buyer-home-nav-image"><img src="/images/icons/envelope.png" /></div>
                        <div class="buyer-home-nav-title"><a href="#"><h2>Messages</h2></a>
                            <div class="buyer-home-nav-detail">Message with other Buyers/Sellers through your message tab - <span class="activity"><a href="#">Check Inbox</a></span>
                        </div>
                    </li>    
                    <li>
                        <div class="buyer-home-nav-image"><img src="/images/icons/star.png" /></div>
                        <div class="buyer-home-nav-title"><a href="#"><h2>Favorites</h2></a>
                            <div class="buyer-home-nav-detail">View all your favorited items and monitor how many are left - <span class="activity"><a href="#">View Favorited Items</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="buyer-home-nav-image"><img src="/images/icons/all-products.png" /></div>
                        <div class="buyer-home-nav-title"><a href="#"><h2>Reviews</h2></a>
                            <div class="buyer-home-nav-detail">Edit and monitor your product reviews at any time - <span class="activity"><a href="#">See Reviews</a></span>
                        </div>
                    </li> 
                    <li>
                        <div class="buyer-home-nav-image"><img src="/images/icons/user.png" /></div>
                        <div class="buyer-home-nav-title"><a href="#"><h2>Manage Account</h2></a>
                            <div class="buyer-home-nav-detail">Manage, upgrade, and change account information - <span class="activity"><a href="#">Set-up Account</a></span>
                        </div>
                    </li>     
                </ul> 
            </div>
        </div>
                        
        <!--- Start Selling area --->
        <div class="buyer-sell-wrapper">
            <h2>Start Selling</h2>
            <div class="buyer-sell-wrapper-detail">Qdinka has created the best platform where young inventors and veteran entrepreneurs alike can come  to buy and sell new technologies, risk free - we handle the processing</div>
            <div class="buyer-sell-wrapper-button">
                <span class="listing-button"><a href="#">Post Listing</a></span>
                <span class="listing-guide-button"><a href="#">Listing Guide</a></span>
            </div>
        </div>
        
    <?php    
    }
    
    protected function side_menu() {

    }   
}