<?php
/**
* Kendall Holm
* Created on 5/11/2015 at 9:47 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages\admin;


use includes\menus\UserAdminMenu;
use includes\template\TemplateBase;
use includes\users\AuthenticationUtil;

class UserAdmin extends TemplateBase {

    protected function body()
    {
        //Authentication Check
        if (!(AuthenticationUtil::is_logged_in() && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_USER_ADMIN))) {
            echo '<div>';
            echo '<h3>You are not permitted to be here.</h3>';
            echo '</div>';
            return;
        }

        if (!param('subPage') || param('subPage') == 'Show All Users') {
            $this->render_show_users();
        }
    }

    protected function side_menu()
    {
        if (AuthenticationUtil::is_logged_in() && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_USER_ADMIN)) {
            $sideMenu = new UserAdminMenu($this->title);
            echo $sideMenu;
        }
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/admin.css');
    }

    private function render_show_users()
    {

    }
}