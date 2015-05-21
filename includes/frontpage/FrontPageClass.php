<?php
/**
 * Kendall Holm
 * Created on 4/10/2015 at 8:07 AM
 * @email kendalldarkmere@gmail.com
 */


namespace includes\frontpage;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/layout.css');
    }

    protected function body()
    {
        ?>
        <!--        Header-->
        <div class="front-page-header-wrapper">
            <h1>Welcome to Qdinka!</h1>
            <h2>Bringing Crowd-funding full circle.</h2>
            <h2>Discover Innovation!</h2>
        </div>

        <!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Recently Added Products</h2>

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

        <!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Fastest Selling</h2>

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

        <!--        Recently added-->
        <div class="front-page-section-wrapper">
            <h2>Staff Picks</h2>

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
        $menu = new MainMenu();
        echo $menu;
    }

}
