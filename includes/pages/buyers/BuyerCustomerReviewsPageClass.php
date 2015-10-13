<?php
/**
* Nannalin Higgins
* Created on 09/20/2015 at 11:30 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerCustomerReviewsPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerCustomerReviewsLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-wrapper">
                <h2>My Customer Reviews - </h2>
                <div class="buyer-content-menu-detail">
                    View, edit, and comment on the reviews you have made 
                    for products that you purchased. Let others know how your purchase has lasted!                
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
                
                <div class="buyer-content-review">
                    <div class="item-wrapper">
                        <div class="view-list-link"><a href="#">View Listing</a></div>
                        <div class="contact-seller-link"><a href="#">Contact Seller</a></div>
                        <div class="item-image"><img src="/images/placeholder-product-image-large.png" /></div>
                        <div class="item-name"><a href="#">Item Name</a></div>
                        <div class="vender">by Someone</div>
                        <div class="overview-rating-wrapper">
                        </div>
                        <div class="overview-cart-wrapper">
                            <input type="submit" name="btnAddToCart" value="Buy Another" />
                        </div>
                    </div>
                    
                    <div class="review-wrapper">
                        <div class="review-header-wrapper">
                            <div class="overview-rating-wrapper">
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                            </div>
                            <span class="review-header-detail">
                                - Review Header
                            </span>
                            <div class="customer-detail">By 
                                <span class="customer-name"> Someone </span>
                                <span class="review-date">On September 24, 2015</span>
                            </div>
                        </div>
                        
                        <div class="review-buttons">
                            <div class="add-comment-button"><a href="#">Add Comment</a></div>
                            <div class="edit-post-button"><a href="#">Edit Post</a></div>    
                        </div>
                        
                        <div class="review-body-wrapper">
                            <p class="review-body-wrapper-top">
                                This is a revolutionary product.
                                <br /><br />
                                After using this product for only two months, I would sooner go without a microwave, a stove-top, or an oven. I have experimented with every cut of meat, tough to tender, beef tongue to salmon and I am amazed with the results. It really is like an iPhone for the kitchen in how quickly it has become indispensable.
                                <br /><br />
                                Warning: you will have to start buying quart and gallon size ziplock bags in bulk...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </p> 
                            <div class="review-body-wrapper-buttom">
                                <div class="review-body-wrapper-buttom-left">
                                  <span class="num-people">10</span> 
                                  People found this useful
                                </div> 
                                <div class="review-body-wrapper-buttom-right">
                                  <span class="num-comments">10</span> 
                                  comments
                                </div>                             
                            </div>
                        </div>                   
                    </div>                     
                </div>
                
                <div class="buyer-content-review">
                    <div class="item-wrapper">
                        <div class="view-list-link"><a href="#">View Listing</a></div>
                        <div class="contact-seller-link"><a href="#">Contact Seller</a></div>
                        <div class="item-image"><img src="/images/placeholder-product-image-large.png" /></div>
                        <div class="item-name"><a href="#">Item Name</a></div>
                        <div class="vender">by Someone</div>
                        <div class="overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                        </div>
                        <div class="overview-cart-wrapper">
                            <input type="submit" name="btnAddToCart" value="Buy Another" />
                        </div>
                    </div>
                    
                    <div class="review-wrapper">
                        <div class="review-header-wrapper">
                            <div class="overview-rating-wrapper">
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                            </div>
                            <span class="review-header-detail">
                                - Review Header
                            </span>
                            <div class="customer-detail">By 
                                <span class="customer-name"> Someone </span>
                                <span class="review-date">On September 24, 2015</span>
                            </div>
                        </div>
                        
                        <div class="review-buttons">
                            <div class="add-comment-button"><a href="#">Add Comment</a></div>
                            <div class="edit-post-button"><a href="#">Edit Post</a></div>    
                        </div>
                        
                        <div class="review-body-wrapper">
                            <p class="review-body-wrapper-top">
                                This is a revolutionary product.
                                <br /><br />
                                After using this product for only two months, I would sooner go without a microwave, a stove-top, or an oven. I have experimented with every cut of meat, tough to tender, beef tongue to salmon and I am amazed with the results. It really is like an iPhone for the kitchen in how quickly it has become indispensable.
                                <br /><br />
                                Warning: you will have to start buying quart and gallon size ziplock bags in bulk...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </p> 
                            <div class="review-body-wrapper-buttom">
                                <div class="review-body-wrapper-buttom-left">
                                  <span class="num-people">10</span> 
                                  People found this useful
                                </div> 
                                <div class="review-body-wrapper-buttom-right">
                                  <span class="num-comments">10</span> 
                                  comments
                                </div>                             
                            </div>
                        </div>                   
                    </div>                     
                </div>
                
                <div class="buyer-content-review">
                    <div class="item-wrapper">
                        <div class="view-list-link"><a href="#">View Listing</a></div>
                        <div class="contact-seller-link"><a href="#">Contact Seller</a></div>
                        <div class="item-image"><img src="/images/placeholder-product-image-large.png" /></div>
                        <div class="item-name"><a href="#">Item Name</a></div>
                        <div class="vender">by Someone</div>
                        <div class="overview-rating-wrapper">
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                            <img src="/images/icons/star.png" />
                        </div>
                        <div class="overview-cart-wrapper">
                            <input type="submit" name="btnAddToCart" value="Buy Another" />
                        </div>
                    </div>
                    
                    <div class="review-wrapper">
                        <div class="review-header-wrapper">
                            <div class="overview-rating-wrapper">
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                                <img src="/images/icons/star.png" />
                            </div>
                            <span class="review-header-detail">
                                - Review Header
                            </span>
                            <div class="customer-detail">By 
                                <span class="customer-name"> Someone </span>
                                <span class="review-date">On September 24, 2015</span>
                            </div>
                        </div>
                        
                        <div class="review-buttons">
                            <div class="add-comment-button"><a href="#">Add Comment</a></div>
                            <div class="edit-post-button"><a href="#">Edit Post</a></div>    
                        </div>
                        
                        <div class="review-body-wrapper">
                            <p class="review-body-wrapper-top">
                                This is a revolutionary product.
                                <br /><br />
                                After using this product for only two months, I would sooner go without a microwave, a stove-top, or an oven. I have experimented with every cut of meat, tough to tender, beef tongue to salmon and I am amazed with the results. It really is like an iPhone for the kitchen in how quickly it has become indispensable.
                                <br /><br />
                                Warning: you will have to start buying quart and gallon size ziplock bags in bulk...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </p> 
                            <div class="review-body-wrapper-buttom">
                                <div class="review-body-wrapper-buttom-left">
                                  <span class="num-people">10</span> 
                                  People found this useful
                                </div> 
                                <div class="review-body-wrapper-buttom-right">
                                  <span class="num-comments">10</span> 
                                  comments
                                </div>                             
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