<?php

namespace includes\pages;

use includes\menus\MainMenu;
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
        <div class="product-main-wrapper">
<!--            Left Column-->
            <div class="left-column-wrapper">

<!--                Video-->
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/C0-P0k2fxOY" frameborder="0" allowfullscreen></iframe>
                </div>

<!--                Social Media-->
                <div class="social-media-wrapper">
                    <a target="_blank" href=""><img src="/images/social_media/pinterest-icon.png" alt="Pinterest" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/facebook-icon.png" alt="Facebook" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/google-icon.png" alt="Google" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/twitter-icon.png" alt="Twitter" /></a>
                    <a target="_blank" href=""><img src="/images/social_media/linkedin-icon.png" alt="LinkedIn" /></a>
                </div>
            </div>

<!--            Right Column-->
            <div class="right-column-wrapper">
                Right
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        //Show menu
        $sideMenu = new MainMenu();
        echo $sideMenu;
    }

}