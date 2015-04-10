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

    //Required methods
    abstract protected function body(); //The body of the

    /**
     * Template constructor
     * @param bool $noTemplate If set to true then no menus or sidebars will be used. It will be a single page.
     * @param bool $maintenance If set it wont redirect when the site is in maintenance mode
     */
    function __construct($noTemplate = false, $maintenance = false)
    {
        //Set flags
        $this->noTemplate = $noTemplate;
        $this->maintenance = $maintenance;
    }

    public function render()
    {
        //check to see if we are in maintenance and if we should redirect
        if (SYSTEM_SETTING_MAINTENANCE && !$this->maintenance) {
            header('Location: ' . url('/system/maintenance.php'));
            return;
        }
    }
}