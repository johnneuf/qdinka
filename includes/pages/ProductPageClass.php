<?php

namespace includes\pages;

use includes\menus\NewMainMenu;
use includes\modules\WeeklyContributors;
use includes\template\TemplateBase;

class ProductPage extends TemplateBase
{
    function __construct()
    {
        parent::__construct('Standard Base');
        $this->add_css('/stylesheets/products.css');
    }

    protected function body()
    {
        // HTML
        ?>
        <!--        Header-->
        <div class="top-header">
            <h3>Sell unlimited products on the only available <span>0% commission</span> platform around. Post more, sell
                more, and make a higher percentage per sale...</h3>
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
            <div>
                <h2>Name of Some Product</h2>
                <div>
                    Sold by: <a href="#">Someone</a>
                </div>
                <div>
                    <div>
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                        <img src="/images/icons/star.png" />
                    </div>
                    <a href="#">00 reviews</a>
                    <span><a href="#">0 questions answered</a> </span>

                    <div>
                        <div>
                            <span>$000.00</span><span>usd</span>
                        </div>
                        <div>
                            <a href="#">Contact Seller</a>
                        </div>
                    </div>

                    <div>
                        <span>In Stock</span> - 00 still available<br>
                        Items condition: <span>New</span>
                    </div>

                    <div>
                        <h3>Overview</h3>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    <?php
    }

    protected function side_menu()
    {
        //Show menu
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';
        $menu = new NewMainMenu();
        $menu->render();

        //Contributors
        $contributors = new WeeklyContributors();
        $contributors->render();
    }

}