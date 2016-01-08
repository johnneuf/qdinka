<?php


namespace includes\pages\sellers;

use includes\template\TemplateBase;

class ReviewListings extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/ReviewListingsLayout.css');

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
		<div class="box2"><a href="#" class="b">Preview Listing</a></div>
		<div class="box3"><a href="#">Publish Listing</a></div>
		
		</div>
		
		
		
		
		<!--        Row one Images and overview-->
        <div class="row-one-wrapper">
<!--            Images Area-->
            <div class="images-wrapper">
                <div class="images-content">
                    <img src="/images/placeholder-product-image-large.png" />
                    <div class="images-slide-wrapper">
                        <div class="images-slide-content">
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                            <img src="/images/placeholder-product-image-large.png" />
                        </div>
                    </div>
                </div>
            </div>

            <!--            Overview area-->
            <div class="overview-wrapper">
                <h2>Name of Some Product</h2>
                <div class="overview-vendor">
                    Sold by: <a href="#">Someone</a>
                </div>
                <div class="overview-content-wrapper">
                    <div class="overview-rating-wrapper">
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <a href="#">00 reviews</a> -
                        <span><a href="#">0 questions answered</a> </span>
                    </div>

                    <div class="overview-price-wrapper">
                        <div class="overview-option-col-left">
                            <span class="overview-price">$000.00</span><span class="overview-currency">USD</span>
                        </div>
                        <div class="overview-price-col-right">
                            <a href="#">Contact Seller</a>
                        </div>
                    </div>

                    <div style="flex: 0 0 auto;">
                        <span class="overview-stock">In Stock</span> - 00 still available<br>
                        Items condition: <span class="overview-condition">New</span>
                    </div>

                   <!-- <div class="overview-options-wrapper">
                        <div class="overview-option-col-left">
                            <input name="txtQuantity" type="number" step="1" id="txtQuantity" />
                            <label for="txtQuantity">Quantity</label><br>
                            <select name="drpColor" id="drpColor">
                                <option value="Red">Red</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                            </select>
                            <label for="drpColor">Color</label>
                        </div>
                        <div class="overview-option-col-right">
                            <select name="drpSize" id="drpSize">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            <label for="drpSize">Size</label>
                        </div>
                    </div>-->

                    <div class="overview-overview-wrapper">
                        <h3>Overview</h3>
                        <ul>
                            <li>Handmade item</li>
                            <li>Materials: Black walnut, reclaimed metal, solid wood, solid wood slab, Slab, live edge</li>
                            <li>Only ships to United States from Detroit, Michigan.</li>
                            <li>Feedback: 29 reviews</li>
                            <li>Favorited by: 4805 people</li>
                             <li>Handmade item</li>
                            <li>Materials: Black walnut, reclaimed metal, solid wood, solid wood slab, Slab, live edge</li>
                            <li>Only ships to United States from Detroit, Michigan.</li>
                            <li>Feedback: 29 reviews</li>
                            <li>Favorited by: 4805 people</li>
                            
                        </ul>
                    </div>

<!--                    <div class="overview-cart-wrapper">-->
<!--                        <input type="submit" name="btnAddToCart" value="Add to Cart" />-->
<!--                    </div>-->
                    <input class="overview-cart-wrapper" type="submit" name="btnAddToCart" value="Add to Cart" />
                </div>
            </div>

        </div>

<!--        Product Description-->
        <div class="product-description-wrapper">
            <h2>Product Description</h2>
            <div>
                <p>
                    

Nomiku is the world's first sous vide immersion circulator built specifically for the home cook, with the durability to stand up to professional kitchens. Sous vide is every top chef's secret weapon to making amazing food, consistently, and now you can make a Michelin star-worthy meal without ever leaving your kitchen.
                </p>

                <p>
                    The Smallest and Simplest
 
Nomiku is the smallest of its kind, easy to handle with just one hand and incredibly compact for easy storage and travel. Simply clip it to a pot you already own, adjust the temperature with green knob, drop your sealed ingredients, wait and come back to an otherworldly meal. 
                </p>

                <p>
                    

Nomiku is the world's first sous vide immersion circulator built specifically for the home cook, with the durability to stand up to professional kitchens. Sous vide is every top chef's secret weapon to making amazing food, consistently, and now you can make a Michelin star-worthy meal without ever leaving your kitchen.
 
 
 
 
The Smallest and Simplest
 
Nomiku is the smallest of its kind, easy to handle with just one hand and incredibly compact for easy storage and travel. Simply clip it to a pot you already own, adjust the temperature with green knob, drop your sealed ingredients, wait and come back to an otherworldly meal.
 
Outfitted with a state-of-the-art heater unique to only Nomiku, you'll be able to sous vide for minutes to days on end without interruption. Nomiku is also US ETL, meaning you'll have the safest sous vide experience for many amazing meals to come.
 
A versatile clip lets you snuggly attach Nomiku to any pot you already own. No extra equipment needed.
                </p>

                <p>
                    With just one knob and one screen, Nomiku is super easy to use. The touchscreen brings Nomiku to life and the knob adjusts the temperature. If you can use a smartphone, you can sous vide!
 
With precise temperature control to the 0.1°C, use exact heat to cook your meals to absolute perfection.
 
Cook Better Together
 
Gain access to hundreds of sous vide recipes from us here at Nomiku, as well as from our vibrant community of Nommers on our app, Tender. Stay hungry, stay inspired.
                </p>

                
            </div>
        </div>

<!--        Row two-->
        <div class="detail-row">
            <div class="detail-left-wrapper">
                <h2>Product Details</h2>
                <p><span class="detail-title">Title: </span>product detail line.</p>
                <p><span class="detail-title">Title: </span>product detail line.</p>
                <p><span class="detail-title">Title: </span>product detail line.</p>
                <p><span class="detail-title">Title: </span>product detail line.</p>
                <p><span class="detail-title">Title: </span>product detail line.</p>
                <p><span class="detail-title">Title: </span>product detail line.</p>
            </div>
            <div class="detail-right-wrapper">
                <h2>What is in the box?</h2>
                <ul>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                </ul>
            </div>
        </div>

<!--        Row three-->
        <div class="QandA-wrapper">
            <div class="QandA-header-wrapper">
                <div class="QandA-header-title">
                    <h2>Q&A About the Product</h2>
                </div>
                <div class="QandA-header-ask">
                    <input type="text" name="txtAskQuestion" placeholder="Ask others what they thought..." />
                    <input type="submit" name="btnAskQuestion" value="ASK" />
                </div>
            </div>

            <div class="QandA-answer-wrapper">
                <h3 class="QandA-question">What is a question that you would like to see here?</h3>
                <h3 class="QandA-answer">Answer:</h3>
                <p>
                    Nullam scelerisque consequat libero ac tempus. Mauris quis convallis lectus, non ullamcorper nibh.
                    Curabitur posuere est non felis pulvinar, et iaculis enim cursus. Praesent sit amet tincidunt justo.
                    Vestibulum id neque mollis, iaculis ipsum id, finibus sem. Cras vehicula dictum erat. Praesent porta
                    arcu eget commodo bibendum. Sed lectus massa, varius vel fringilla eu, iaculis sit amet dolor. Sed
                    bibendum nisl in ante efficitur mattis. Vestibulum at augue consequat, gravida velit ac, eleifend
                    odio.
                </p>
                <span class="QandA-user">- The Blah answered on January 1, 1972</span><br>
                <span class="QandA-more">See more answers (0)</span>
            </div>

            <div class="QandA-answer-wrapper">
                <h3 class="QandA-question">What is a question that you would like to see here?</h3>
                <h3 class="QandA-answer">Answer:</h3>
                <p>
                    Nullam scelerisque consequat libero ac tempus. Mauris quis convallis lectus, non ullamcorper nibh.
                    Curabitur posuere est non felis pulvinar, et iaculis enim cursus. Praesent sit amet tincidunt justo.
                    Vestibulum id neque mollis, iaculis ipsum id, finibus sem. Cras vehicula dictum erat. Praesent porta
                    arcu eget commodo bibendum. Sed lectus massa, varius vel fringilla eu, iaculis sit amet dolor. Sed
                    bibendum nisl in ante efficitur mattis. Vestibulum at augue consequat, gravida velit ac, eleifend
                    odio.
                </p>
                <span class="QandA-user">- The Blah answered on January 1, 1972</span><br>
                <span class="QandA-more">See more answers (0)</span>
            </div>

            <div class="QandA-answer-wrapper">
                <h3 class="QandA-question">What is a question that you would like to see here?</h3>
                <h3 class="QandA-answer">Answer:</h3>
                <p>
                    Nullam scelerisque consequat libero ac tempus. Mauris quis convallis lectus, non ullamcorper nibh.
                    Curabitur posuere est non felis pulvinar, et iaculis enim cursus. Praesent sit amet tincidunt justo.
                    Vestibulum id neque mollis, iaculis ipsum id, finibus sem. Cras vehicula dictum erat. Praesent porta
                    arcu eget commodo bibendum. Sed lectus massa, varius vel fringilla eu, iaculis sit amet dolor. Sed
                    bibendum nisl in ante efficitur mattis. Vestibulum at augue consequat, gravida velit ac, eleifend
                    odio.
                </p>
                <span class="QandA-user">- The Blah answered on January 1, 1972</span><br>
                <span class="QandA-more">See more answers (0)</span>
            </div>
        </div>

<!--        Row Four-->
        <div class="review-wrapper">
            <div class="review-header-wrapper">
                <div class="review-header-left-col">
                    <h2>
                        Customer Reviews -
                       <!-- <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />-->
                        <span>0 Reviews</span>
                    </h2>
                </div>
                <div class="review-header-right-col">
                    <a href="#">Write A Review</a>
                </div>
            </div>
			<h3>There have been no review for this product...</h3>

         
        </div>
		</div>
		<div>
		 <div class="draft">
<button class="cancel-button"><a href="">Cancel</a></button>
<button class="draft-button"><a href="">Draft</a></button>
</div>	
<div class="preview-area">
<p>Congrualations! Next step is to Preview your listing to be sure it looks and reads exactly how you want it to. </p>
<div class="preview"><button class="preview-button"><a href="">Preview</a></button></div>
</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>	
				
			<?php    
    }
    
    protected function side_menu() {
    }   
}