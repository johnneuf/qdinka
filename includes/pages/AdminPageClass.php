<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:35 PM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\AdminMenu;
use includes\template\TemplateBase;

class AdminPage extends TemplateBase {

    protected function body()
    {
        // TODO: Implement body() method.
    }

    protected function side_menu()
    {
        $menu = new AdminMenu($this->title);
        echo $menu;
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);
    }
}