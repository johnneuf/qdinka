<?php
namespace includes\pages\CartPage;

use includes\template\TemplateBase;

class CartPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/Cartlayout.css');

    }
	protected function body() {
?>

<div class="create-wrapper">
	                <div class="menu-wrapper">
					<div class="box1"><a class="b" href="#">Shopping Cart</a></div>
					<div class="box2"><a href="#">Express Checkout</a></div>
					<div class="box3"><a href="#">Order Summary</a></div>
			        </div>
			 
			
			<div class="product-wrapper1">
             
                    <div class="save-for-later"><a href="#">save for later</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="product-image"><img src="/images/placeholder-product-image-large.png "/></div>
                    <div class="item-name"><a href="#">pink earbud wireless product</a></div>
					<div class="product-specification">
			        Quantity:<span id="quantity"></span><br>
                    Color:<span id="color"></span><br>
                    Size:<span id="size"></span>
                     </div><br>
                    <div class="vender"><a href="">contact seller</a></div>
                    <div class="price-wrapper">$<span id="price">15.98</span></div>
                     </div>
					<div class="product-wrapper2">
               
                    <div class="save-for-later"><a href="#">save for later</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="product-image"><img src="/images/placeholder-product-image-large.png" /></div>
                    <div class="item-name"><a href="#">pink earbud wireless product</a></div>
					<div class="product-specification">
			        Quantity:<span id="quantity"></span><br>
                    Color:<span id="color"></span><br>
                    Size:<span id="size"></span>
                     </div><br>
					<div class="vender"><a href="">contact seller</a></div>
                    <div class="price-wrapper">$<span id="price">15.98</span></div>
                    </div>
					<div class="product-wrapper3">
                
                    <div class="save-for-later"><a href="#">save for later</a></div>
                    <div class="remove-item"><a href="#">Remove Item</a></div>
                    <div class="product-image"><img src="/images/placeholder-product-image-large.png" /></div>
                    <div class="item-name"><a href="#">pink earbud wireless product</a></div>
					<div class="product-specification">
			        Quantity:<span id="quantity"></span><br>
                    Color:<span id="color"></span><br>
                    Size:<span id="size"></span>
                     </div><br>
                    <div class="vender"><a href="">contact seller</a></div>
                    <div class="price-wrapper">$<span id="price">15.98</span></div>
                    </div>
					<div>
					<a href="" class="checkout-button">Continue To Checkout</a>
					<a href="" class="subtotal-wrapper">SubTotal:$<span id="sub-total">80.00</span></a>
					</div>
			
			
					
	
 </div>
		   
	 <div class="createlisting-wrapper">
	 
	 <h3> Create your Listing</h3>
	 <br>
	 <p>Qdinka has created the best platform where young inventors and veteran entrepreneurs alike can come 
	 to buy and sell new technologies, risk free - we handle the processing</p><br>
	 <a href="" class="post-button">Post Listing</a>
	 <a href="" class="button">Listing Guide</a>
	 
	 </div>
	 
	  <?php    
    }
    
    protected function side_menu() {
    }   
}
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 