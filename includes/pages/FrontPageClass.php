<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 10:19 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    protected function body()
    {
        // TODO: Implement body() method.
    }

    protected function side_menu()
    {
        // Add the menu
        $menu = new MainMenu($this->title);
        echo $menu;
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/layout.css');
    }

}