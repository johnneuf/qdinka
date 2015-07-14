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
        <div class="top-header">
            <h3>Sell unlimited products on the only available <u>0% commission</u> platform around. Post more, sell
                more, and make a higher percentage per sale...</h3>
        </div>

<!--        Advertisement Area-->
        <div>
            <div>
                <img src="/images/temp/advert1.jpg" />
            </div>
            <div>
                <div>
                    <h1>Changing the Industry</h1>
                    Qdinka has created the most comprehensive online marketplace to-date. Here anyone can buy, sell,
                    market, trade, and track products. Allow yourself the chance to make more money than ever before.
                    All of your favorite tools in one place...
                </div>
                <div>
                    <a href="#">Start Growing Your Business</a>
                </div>
            </div>
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
