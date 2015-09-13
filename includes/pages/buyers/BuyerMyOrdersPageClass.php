<?php
/**
* Nannalin Higgins
* Created on 09/05/2015 at 2:30 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerMyOrdersPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerMyordersLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-wrapper">
                <h2>My Orders - </h2>
                <div class="buyer-content-menu-detail">
                    Review, track, and rate your purchases. Give the seller a rating so other users may know how your experience was. Print and save reciepts for every order!
                </div>
                <div class="head-activity">
                    <a href="#">Print page></a>    
                </div>
            </div>
            

            <div class="buyer-content-body">
                <div class="duration-wrapper">
                    <ul class="duration-nav">
                        <li><a href="#">Last 30 days</a></li>
                        <li><a href="#">Last 3 months</a></li>
                        <li><a href="#">Last 6 months</a></li>
                        <li><a href="#">Last year</a></li>
                        <li><a href="#">All time</a></li>
                    </ul>
                </div>                
                
                <div class="buyer-content-ordered">
                    <div class="ordered-list-header">
                        <div class="date">
                            Order Placed<br /><span id="orderedDate"> September 8th, 2015</span>
                        </div>
                        <div class="totalCost">
                            Total Cost<br /><span id="totCost">$1000.00</span>
                        </div>
                        <div class="receiver">
                            Ship To<br /><span id="receiverName">John Neufer</span>
                        </div>
                        <div class="orderedNumber">
                            Order # <span id="orderedNum">105-4796240-8130653</span><br />
                            <a href="#">View order details ></a>
                        </div>
                    </div>
                    
                    <div class="ordered-detail">
                        <p><hr class="dash" /></p>
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
                                <div class="rebuy-button"><a href="#">Buy Another</a></div>
                                <div class="track-package-button"><a href="#">Track Package</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Estimated Delivery: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-seller"><a href="#">Contact Seller</a></div>
                            <div class="ordered-quality">Quality: <span id="orderedQualityNum">1</span></div>
                            <div class="ordered-price">$<span id="price">600.99</span></div>
                            <div class="ordered-button-2">
                                <div class="review-button"><a href="#">Write a Product Review</a></div>
                                <div class="rate-button"><a href="#">Rate Seller</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ordered-detail">
                        <p><hr class="dash" /></p>
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
                                <div class="rebuy-button"><a href="#">Buy Another</a></div>
                                <div class="track-package-button"><a href="#">Track Package</a></div>
                            </div>
                        </div>
                        <div class="ordered-list-2">
                            <div class="estimated-delivery">Estimated Delivery: <br /><span class="estimated-delivery-date">July 26th, 2015</span></div>
                            <div class="contact-seller"><a href="#">Contact Seller</a></div>
                            <div class="ordered-quality">Quality: <span id="orderedQualityNum">1</span></div>
                            <div class="ordered-price">$<span id="price">600.99</span></div>
                            <div class="ordered-button-2">
                                <div class="review-button"><a href="#">Write a Product Review</a></div>
                                <div class="rate-button"><a href="#">Rate Seller</a></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div> 
                
                <div class="pagesButtons">
                    <input type="button" class="button" value="< previous page" name="previous" onClick="#">
                    <span id="page-number"><a href="#">1 2 3 ... 29</a></span>
                    <input type="button" class="button" value="next page >" name="next" onClick="#">    
                </div>    
               
            </div>
        </div>
                        
        <!--- Create New Listing area --->
        <div class="new-listing-wrapper">
            <div class="new-listing-wrapper-content">
                <h2>Create a New Listing</h2>
                <div class="new-listing-wrapper-content-detail">If you want to make sales, you are going to need to list your product! Follow our listing guide where we show you some of the best ways to present your product and attract more buyers.</div>
                <div class="new-listing-wrapper-content-button">
<!--                    <span class="listing-button"><a href="#">Post a New Listing</a></span>
                    <span class="follow-listing-button"><a href="#">Follow Listing Guide</a></span>-->
                    
                    <div class="follow-listing-button"><a href="#">Follow Listing Guide</a></div>                    
                    <div class="listing-button"><a href="#">Post a New Listing</a></div>
                </div>
            </div>
            <div class="new-listing-wrapper-image">
                <img src="/images/icons/sale_tag.png" />
            </div>
        </div>

       <!--- Communicate area --->
        <div class="communicate-wrapper">
            <div class="communicate-wrapper-image">
                <img src="/images/icons/communicate.png" /> 
            </div>
            <div class="communicate-wrapper-content">
                <h2>Remember to Communicate</h2>
                <div class="communicate-wrapper-content-detail">Every day a sale is lost due to a serious lack of communication, both from buyer and seller. Continually check your Messages tab to be sure you do not lose any sales.</div>
                <div class="communicate-wrapper-content-button">
                <div class="open-message-button"><a href="#">Open Messages</a></div>
                </div>
            </div>
        </div>        
    <?php    
    }
    
    protected function side_menu() {

    }   
}            