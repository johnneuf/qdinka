<?php
/**
* Kendall Holm
* Created on 4/27/2015 at 8:45 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class ErrorPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);
    }

    protected function body()
    {
        echo '<div class="error-wrapper">';
        echo '<h1>We have an error!!</h1>';
        echo '<h2>The error is: ' . param('error') . '</h2>';
        echo '</div>';
    }

    protected function side_menu()
    {
        $menu = new MainMenu();
        echo $menu;
    }

}