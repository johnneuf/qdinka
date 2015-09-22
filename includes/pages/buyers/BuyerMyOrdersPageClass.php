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

                <!--        Bottom Paginator-->
                <div class="subview-bottom-paginate-wrapper">
                    <div class="subview-bottom-paginate">
                        <span class="deactivated-link">< previous page </span><span class="active-link">1 2 3</span> . . .
                        <span class="active-link"> next page ></span>
                    </div>
                </div>
               
            </div>
        </div>
        
        <!-- Buyer Bottom Area --->
        <?php include 'BuyerContentBottom.php'; ?>
        
    <?php    
    }
    
    protected function side_menu() {

    }   
}            