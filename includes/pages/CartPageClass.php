<?php 
/**
*Ricardo Frias
* Created on 6/8/15 6:13pm
* @email ricardoffrias@gmail.com
*random edit
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class CartPage extends TemplateBase {
	function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/layout.css');
    }

    protected function body()
    {
        ?>
			
			<div class="cart-page-section-wrapper">
                <h2><?php echo "Shopping Cart"; ?></h2>
           
         <div class="cart-card-wrapper">
                    <div class="cart-card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                       	 	</div>
                    </div>
                </div>
         <div class="cart-card-wrapper">
                    <div class="cart-card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        	</div>
                    </div>
                </div>
			<div class="cart-card-wrapper">
                    <div class="cart-card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        	<div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        	</div>
                    </div>
                </div>
				
</div>
<?php
}

protected function side_menu() {

}
}