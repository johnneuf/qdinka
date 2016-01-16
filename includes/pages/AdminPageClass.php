<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:35 PM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\AdminMenu;
use includes\template\TemplateBase;
use includes\users\AuthenticationUtil;

class AdminPage extends TemplateBase {

    protected function body()
    {
        ?>
        <div>
            <?php
            //Check to see if the person can be here
            //TODO: Prevent access to people not on the list in future
//            if (!(AuthenticationUtil::is_logged_in() && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_VIEW_ADMIN_PAGE))) {
//                echo '<h3>You cannot be here.</h3>';
//                echo '</div>';
//                return;
//            }
            ?>
        </div>
    <?php
    }

    protected function side_menu()
    {
        //Check if the user can see this
        //TODO: Prevent access to people not on the list in future
//        if (!(AuthenticationUtil::is_logged_in() && AuthenticationUtil::check_privilege($this->user, AuthenticationUtil::PRIVILEGE_VIEW_ADMIN_PAGE))) {
//            return;
//        }
        $menu = new AdminMenu();
        echo $menu;
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/admin.css');
    }
}