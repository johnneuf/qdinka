<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 7:38 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\template;


abstract class TemplateBase {
    //Properties
    private $noTemplate = false; //Flags the page to be a single page with no menus or side bars
    private $maintenance = false; //Determines if the page can be viewed in maintenance mode
    private $title = 'none';
    private $css = array();
    private $js = array();

    //Required methods
    abstract protected function body(); //The body of the
    abstract protected function side_bar(); //The side bar

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
    }

    public function render()
    {
        //check to see if we are in maintenance and if we should redirect
        if (SYSTEM_SETTING_MAINTENANCE && !$this->maintenance) {
            header('Location: ' . url('/maintenance.php'));
            return;
        }

        //Render the correct template
        if ($this->noTemplate) {
            $this->render_html_noTemplate();
        } else {
            $this->render_html_template();
        }
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
        <script src="/javascript/jquery-2.1.3.min.js"></script>
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
                <input type="text" name="txtSearch"/>
                <input type="image" name="btnSubmit" src="/images/icons/search.png" />
            </form>
        </div>
        <div class="template-header-menu">
            <ul>
                <li><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/user.png" alt="user" title="Merchants UI"/></a></li>
                <li><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/Shopping-Cart.png" alt="shopping cart" title="Shopping Cart"/></a></li>
                <li><a href="/index.php"><img src="/images/icons/login.png" alt="login" title="Login"/></a></li>
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
<!--        TODO:: Add Footer-->
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

    protected function side_menu()
    {
        ?>
        <div class="template-side-menu">
            <h1>Browse Products</h1>
            <div class="template-side-menu-content">
                <ul>
                    <li><img src="/images/icons/all-products.png" alt="all products" /><a href="">All Products</a></li>
                    <li><img src="/images/icons/Accessories.png" alt="Accessories" /><a href="">Accessories</a></li>
                    <li><img src="/images/icons/ApparelAccessories.gif" alt="Apparel" /><a href="">Apparel</a></li>
                </ul>
            </div>
        </div>
    <?php
    }
}