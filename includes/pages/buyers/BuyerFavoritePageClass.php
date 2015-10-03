<?php
/**
* Nannalin Higgins
* Created on 09/15/2015 at 7:00 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerFavoritePage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerFavoriteLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-wrapper">
                <h2>Favorite Items </h2>
            </div>
            
            <div class="buyer-content-body">
                <ul class="favorite-item-head">
                    <li class="item-head">Item</li>
                    <li class="price-head">Listed Price</li>
                    <li class="view-head">Views</li>
                    <li class="stock-head"># In Stock</li>
                    <li class="date-head">Date Posted</li>
                    <li class="active-head">Active</li>
                </ul>    
            </div>
            
            <div class="favorite-overview-wrapper">
                <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/placeholder-product-image-large.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    <div class="vender">by Someone</div>
                    <div class="favorite-overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                    </div>
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="btnAddToCart" value="Add to Cart" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">100.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">100</span> views
                        </div>
                        <div class="instock">
                            <span class="instock-num">100</span> in stock
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active">Yes</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Find it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png"></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    <li class="logo-bonanza"><a href="#"><img src="/images/logos/bonanza.png"></a></li>
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="buy-now-button"><a href="#">Buy Now</a></span>
                            <span class="contact-seller-button" style="display: none;"><a href="#">Contact Seller</a></span>
                        </div>
 
                    </div>
                </div>
            </div>

            <div class="favorite-overview-wrapper">
                <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/placeholder-product-image-large.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    <div class="vender">by Someone</div>
                    <div class="favorite-overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                    </div>
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="btnAddToCart" value="Add to Cart" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">100.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">100</span> views
                        </div>
                        <div class="instock">
                            <span class="instock-num">100</span> in stock
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active">Yes</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Find it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png"></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    <li class="logo-bonanza"><a href="#"><img src="/images/logos/bonanza.png"></a></li>
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="buy-now-button"><a href="#">Buy Now</a></span>
                            <span class="contact-seller-button" style="display: none;"><a href="#">Contact Seller</a></span>
                        </div>
 
                    </div>
                </div>
            </div>            
                       
            <div class="favorite-overview-wrapper">
                <div class="favorite-item-wrapper">
                    <div class="view-list-link"><a href="#">View Listing</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="favorite-image"><img src="/images/placeholder-product-image-large.png" /></div>
                    <div class="item-name"><a href="#">Item Name</a></div>
                    <div class="vender">by Someone</div>
                    <div class="favorite-overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                    </div>
                    <div class="favorite-overview-cart-wrapper">
                        <input type="submit" name="btnAddToCart" value="Add to Cart" />
                    </div>
                </div>
                    
                <div class="favorite-item-detail">
                    <div class="favorite-item-detail-top">
                        <div class="listed-price">
                            $<span class="favorite-listed-price">100.00</span>
                        </div>
                        <div class="views">
                            <span class="views-num">100</span> views
                        </div>
                        <div class="instock">
                            <span class="instock-num">100</span> in stock
                        </div>
                        <div class="posted-date">00/00/0000</div>
                        <div class="active" style="display: none;">Yes</div>
                        <div class="not-active">No</div>
                    </div>
                    
                    <div class="favorite-item-detail-bottom">
                        <div class="detail-bottom-left-col">
                            <h2>Find it on: </h2>
                            <ul class="marketplace-link">
                                    <li class="logo-amazon"><a href="#"><img src="/images/logos/amazon.png"></a></li>
                                    <li class="logo-ebay"><a href="#"><img src="/images/logos/ebay.png"></a></li>
                                    <li class="logo-etsy"><a href="#"><img src="/images/logos/etsy.png"></a></li>
                                    <li class="logo-cragslist"><a href="#"><img src="/images/logos/craigslist.png"></a></li>
                                    <li class="logo-bonanza"><a href="#"><img src="/images/logos/bonanza.png"></a></li>
                            </ul>
                        </div>
                        
                        <div class="detail-bottom-right-col" >
                            <span class="buy-now-button" style="display: none;"><a href="#">Buy Now</a></span>
                            <span class="contact-seller-button"><a href="#">Contact Seller</a></span>
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