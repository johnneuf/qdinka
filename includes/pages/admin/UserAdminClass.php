<?php
/**
* Kendall Holm
* Created on 5/11/2015 at 9:47 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages\admin;


use includes\database\DatabaseUtil;
use includes\menus\UserAdminMenu;
use includes\misc\Paginator;
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
        } elseif (param('subPage') == 'Add User') {

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
        $mysqli = DatabaseUtil::db_connect(DatabaseUtil::DATABASE_USER);

        $page = (param('pageNumber')) ? param('pageNumber') : 1;
        $limit = (param('limit')) ? param('limit') : 25;
        $sql = 'select ID, userName, emailAddress, company from users';

        $paginator = new Paginator($mysqli, $sql);
        $results = $paginator->get_records($limit, $page);

        ?>
        <div class="admin-page-wrapper">
            <div>
                <?php echo $paginator->get_links('pagination-links', '/pages/admin/useradmin.php?subPage=Show All Users'); ?>
            </div>

            <div>
                <table>
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Company</td>
                        <td>Email</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    foreach ($results->records as $record) {
                        echo '<tr>';
                        echo '<td>' . $record->userName . '</td>';
                        echo '<td>' . $record->company . '</td>';
                        echo '<td>' . $record->emailAddress . '</td>';
                        echo '<td><a href="#" >Message</a> | <a href="#" >Edit</a> | <a href="#" >Delete</a></td>';
                        echo '</tr>';
                    }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
}