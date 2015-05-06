<?php
/**
* Kendall Holm
* Created on 5/6/2015 at 7:23 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class RegistrationPage extends TemplateBase {
    function __construct($noTemplate = false, $maintenance = false)
    {
        parent::__construct('Registration', $noTemplate, $maintenance);

        $this->add_css('/stylesheets/loginout.css');
    }

    protected function body()
    {
        // TODO: Implement body() method.
    }

    protected function side_menu()
    {
        $menu = new MainMenu();
        echo $menu;
    }
}