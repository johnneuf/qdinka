<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:12 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;
use includes\users\AuthenticationUtil;

class LogoutPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/loginout.css');
    }

    protected function body()
    {
        AuthenticationUtil::logout();

        ?>
        <div class="main-wrapper">
            <div class="login-wrapper">
                <h3>You are now logged out.</h3>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        $menu = new MainMenu();
        echo $menu;
    }
}