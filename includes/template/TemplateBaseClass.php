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
        if (SessionUtil::session('user')) {
            $this->user = unserialize(SessionUtil::session('user'));
        }
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
                <?php
        //Print the admin page if they have access to it
        if (!is_null($this->user) && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_VIEW_ADMIN_PAGE)) {
            echo '<li class="template-header-menu-right"><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/admin.png" alt="admin" title="Admin UI"/></a></li>';
        }

        //Print the merchant page if they have access to it.
        if (!is_null($this->user) && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_VIEW_MERCHANT_PAGE)) {
            echo '<li class="template-header-menu-right"><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/user.png" alt="user" title="Merchants UI"/></a></li>';
        }

        ?>
                <li class="template-header-menu-right"><a href="/index.php"><img class="template-header-menu-right" src="/images/icons/Shopping-Cart.png" alt="shopping cart" title="Shopping Cart"/></a></li>
                <?php
        //Check to see if the person is logged in an display the correct link
        if (AuthenticationUtil::is_logged_in()) {
            echo '<li><a href="/pages/users/logout.php"><img src="/images/icons/logout.png" alt="logout" title="Login"/></a></li>';
        } else {
            echo '<li><a href="/pages/users/login.php"><img src="/images/icons/login.png" alt="login" title="Login"/></a></li>';
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

    protected function side_bar()
    {
        ?>
        <div class="template-side-menu">
<!--            <h3>Browse Products</h3>-->
            <?php $this->side_menu(); ?>
        </div>
        <div class="template-copyright">
            <p>Copyright &#64; Qdinka 2015 All rights reserved</p>
        </div>
        <div class="template-disclaimer">
            <p>
                The information contained in this website is for general information purposes only.
                The information is provided by Qdinka Inc. and while we endeavour to keep the information up to date
                and correct, we make no representations or warranties of any kind, express or implied, about the
                completeness, accuracy, reliability, suitability or availability with respect to the website or the
                information, products, services, or related graphics contained on the website for any purpose. Any
                reliance you place on such information is therefore strictly at your own risk. In no event will we be
                liable for any loss or damage including without limitation, indirect or consequential loss or damage,
                or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection
                \with, the use of this website. Through this website you are able to link to other websites which are
                not under the control of Qdinka Inc. We have no control over the nature, content and availability of
                those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the
                views expressed within them. Every effort is made to keep the website up and running smoothly. However,
                Qdinka Inc. takes no responsibility for, and will not be liable for, the website being temporarily
                unavailable due to technical issues beyond our control.
            </p>
        </div>
    <?php
    }
}