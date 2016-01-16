<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 7:38 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\template;


use includes\users\AuthenticationUtil;
use includes\users\SessionUtil;

abstract class TemplateBase {
    //Properties
    private $noTemplate = false; //Flags the page to be a single page with no menus or side bars
    private $maintenance = false; //Determines if the page can be viewed in maintenance mode
    protected $title = 'none';
    private $css = array();
    private $js = array();
    protected $user = null;

    //Required methods
    abstract protected function body(); //The body of the
    abstract protected function side_menu(); //The side bar

    /**
     * Template constructor
     * @param string $title Title of the web page
     * @param bool $noTemplate If set to true then no menus or sidebars will be used. It will be a single page.
     * @param bool $maintenance If set it wont redirect when the site is in maintenance mode
     */
    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        //Set flags
        $this->noTemplate = $noTemplate;
        $this->maintenance = $maintenance;
        $this->title = $title;

        SessionUtil::start_session();

        //Check for a user and save the data
       $this->user = AuthenticationUtil::get_user();
    }

    public function render()
    {
        ob_start();

        //check to see if we are in maintenance and if we should redirect
        if (SYSTEM_SETTING_MAINTENANCE && !$this->maintenance) {
            header('Location: ' . url('/maintenance.php'));
            exit;
        }

        //Render the correct template
        if ($this->noTemplate) {
            $this->render_html_noTemplate();
        } else {
            $this->render_html_template();
        }
        ob_end_flush();
    }

    /**
     * Renders out the page with out the template
     */
    private function render_html_noTemplate()
    {

        ?>
        <!DOCTYPE HTML>

        <html>
        <head>
            <!--        meta data-->
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

            <!--        CSS-->
            <link rel="stylesheet" type="text/css" href="/stylesheets/base.css">
            <?php $this->render_css(); ?>

            <!--        JS-->
            <script src="/javascript/jquery-2.1.3.min.js"></script>
            <?php $this->render_js(); ?>
            <title><?php echo $this->title; ?></title>
        </head>

        <body>

        <section>
            <div class="template-noTemplate-wrapper">
                <?php $this->body(); ?>
            </div>
        </section>

        </body>
        </html>
    <?php
    }

    /**
     * Renders the Page with the Template
     */
    private function render_html_template()
    {
        ?>
        <!DOCTYPE HTML>

        <html>
    <head>
<!--        meta data-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--        CSS-->
        <link rel="stylesheet" type="text/css" href="/stylesheets/base.css">
        <?php $this->render_css(); ?>

<!--        JS-->
        <script src="/javascript/angular.min.js"></script>
        <?php $this->render_js(); ?>
        <title><?php echo $this->title; ?></title>
    </head>

    <body>

    <header>
    <div class="template-header-wrapper">
        <div class="template-logo-wrapper">
            <a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>"><img src="/images/QdinkaFull25.png" /></a>
        </div>
        <div class="template-search-bar-wrapper">
            <form action="" method="post">
                <input type="text" name="txtSearch" placeholder="Search <?php echo $this->title; ?> ..."/>
                <input type="image" name="btnSubmit" src="/images/icons/search.png" />
            </form>
        </div>
        <div class="template-header-menu">
            <ul>
                <li class="template-header-menu-right"><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/Shopping-Cart.png" alt="shopping cart" title="Shopping Cart"/></a></li>
                <?php
        //Print the admin page if they have access to it
        if ($this->user && AuthenticationUtil::has_privilege($this->user, AuthenticationUtil::ENUM_GROUP_ADMIN, AuthenticationUtil::ENUM_AUTH_VIEW)) {
            echo '<li class="template-header-menu-right"><a href="/pages/admin/admin.php"> | Admin</a></li>';
        }

//        Print the merchant page if they have access to it.
        if ($this->user && AuthenticationUtil::has_privilege($this->user, AuthenticationUtil::ENUM_GROUP_VENDOR, AuthenticationUtil::ENUM_AUTH_VIEW)) {
            echo '<li class="template-header-menu-right"><a href="/index.php"> | Sell</a></li>';
        }

        //Check to see if the person is logged in an display the correct link
        if (AuthenticationUtil::is_logged_in()) {
            echo '<li><a href="/pages/users/logout.php"> | Logout</a></li>';
        } else {
            echo '<li><a href="/pages/users/login.php"> | Login</a></li>';
        }
        ?>
            </ul>
        </div>
    </div>
    </header>

    <section>
        <div class="template-wrapper">
            <div class="template-side-menu-wrapper">
                <?php $this->side_bar(); ?>
            </div>
            <div class="template-content-wrapper">
                <?php $this->body(); ?>
            </div>
        </div>
    </section>

    <footer>
    <div class="template-footer-wrapper">

    <div class="template-footer-menu-wrapper">

    <div class="menu-item"><a href="#">About Qdinka</a></div>
    <div class="menu-item"><a href="#">Community</a></div>
    <div class="menu-item"><a href="#">Seller Information Center</a></div>
    <div class="menu-item"><a href="#">Policies</a></div>
    <div class="menu-item"><a href="#">Affiliates and Partners</a></div>
    <div class="menu-item"><a href="#">Help/Contact</a></div>
    <br>
<hr />
</div>

<div class="template-footer-content-wrapper">
<div class="footer-image-wrapper">
<a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>"><img class="footer-image" src="/images/QdinkaFull25.png" /> </a>
</div>
<div class="footer-content">
A Note from the founders:<br />
Created in order to bring a balance to the Online Marketplace industry, we want our users to actually enjoy selling on
the internet, and not have to worry about hundreds of hidden fees, unnavigable seller profiles, and unreliable customer
service. Our users are guaranteed a more than satisfactory experience with the most comprehensive seller platform
available; post products, track sales, integrate QuickBooks, market and promote your business and products.
</div>
<div class="footer-social-wrapper">
<img class="social-image" src="/images/social_media/facebook-icon.png" />
<img class="social-image" src="/images/social_media/twitter-icon.png" />
<img class="social-image" src="/images/social_media/google-icon.png" />
</div>
</div>

</div>
    </footer>

    </body>
    </html>
    <?php
    }

    /**
     * Renders out the javascript for the page
     */
    private function render_js()
    {
        //loop through and add all of the js files
        if (!empty($this->js)) {
            foreach ($this->js as $js) {
                echo '<script src="' . $js . '"></script>';
            }

        }
    }

    /**
     * Renders the css for the page
     */
    private function render_css()
    {
        //loop through and add all of the css
        if (!empty($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" type="text/css" href="' . $css . '">';
            }
        }

    }

    /**
     * Adds a CSS  file to the page
     * @param string $fileName
     */
    protected function add_css($fileName)
    {
        $this->css[] = $fileName;
    }

    /**
     * Adds a JavaScript file to the page
     * @param string $fileName
     */
    protected function add_js($fileName)
    {
        $this->js[] = $fileName;
    }

    protected function side_bar()
    {
        ?>
        <div class="template-side-menu">
<!--            <h3>Browse Products</h3>-->
            <?php $this->side_menu(); ?>
        </div>
<!--        <div class="template-copyright">
            <p>Copyright &#64; Qdinka 2015 All rights reserved</p>
        </div>-->
    <?php
    }
}