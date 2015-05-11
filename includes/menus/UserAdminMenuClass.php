<?php
/**
* Kendall Holm
* Created on 5/11/2015 at 9:56 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


class UserAdminMenu extends MenuBase {

    function __construct($highlightItem = 'none')
    {
        $this->highlightItem = $highlightItem;

        $this->menuItems[0][] = ['/images/icons/admin.png', '/pages/admin/admin.php', 'Main Admin Page'];
        $this->menuItems[0][] = ['/images/icons/user.png', '#', 'Show All Users'];
        $this->menuItems[0][] = ['/images/icons/user.png', '#', 'Add User'];
    }
}