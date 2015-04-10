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
    }

    public function render()
    {
        //check to see if we are in maintenance and if we should redirect
        if (SYSTEM_SETTING_MAINTENANCE && !$this->maintenance) {
            header('Location: /maintenance.php');
            return;
        }
    }

    private function html_start()
    {
        ?>
        <!DOCTYPE HTML>

        <html>
    <head>
<!--        meta data-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--        CSS-->
        <link rel="stylesheet" type="text/css" href="/stylesheets/base.css">
        <?php $this->render_css(); ?>

<!--        JS-->
        <script src="/javascript/jquery-2.1.3.min.js"></script>
        <?php $this->render_js(); ?>
        <title><?php echo $this->title; ?></title>
    </head>
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
}