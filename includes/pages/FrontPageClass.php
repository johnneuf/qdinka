<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 10:19 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\NewMainMenu;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    protected function body()
    {
        ?>
            <div class="front-page-section-wrapper">
                <h2><?php echo $this->title; ?></h2>

                <!--                cards start-->
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <!--                Cards end-->
                <!--                cards start-->
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <!--                Cards end-->
                <!--                cards start-->
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-content-wrapper">
                        <div class="card-image">
                            <a href=""><img src="/images/no-image.png" alt="No Image" /></a>
                        </div>
                        <div class="card-info">
                            <span class="card-title"><a href="">Product Name</a></span>
                            <span class="card-price">$0.00</span>
                        </div>
                    </div>
                </div>
                <!--                Cards end-->
            </div>
    <?php
    }

    protected function side_menu()
    {
        // Add the menu
        $menu = new NewMainMenu($this->title);
        $menu->render();
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/layout.css');
    }

}