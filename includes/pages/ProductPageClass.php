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

        </div>
<!--            Overview area-->
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