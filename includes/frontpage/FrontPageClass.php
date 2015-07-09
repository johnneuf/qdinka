<?php
/**
 * Kendall Holm
 * Created on 4/10/2015 at 8:07 AM
 * @email kendalldarkmere@gmail.com
 */


namespace includes\frontpage;


use includes\menus\NewMainMenu;
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
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';
        $menu = new NewMainMenu();
        $menu->render();

        //Html
        ?>
        <div class="front-page-contributors-wrapper">
            <div class="contributor-header-top"><h2>Top Contributors</h2></div>
            <div class="contributor-header-sub"><h3>Updated Weekly</h3></div>
            <hr />
            <div class="contributor-card-wrapper">
                <div class="contributor-card">
                    Some Name - <a href="#">Some Company Inc.</a><br />
                    <a href="#">View Products</a>
                </div>
                <div class="contributor-card">
                    Some Name - <a href="#">Some Company Inc.</a><br />
                    <a href="#">View Products</a>
                </div>
            </div>
        </div>
        <?php
    }

}
