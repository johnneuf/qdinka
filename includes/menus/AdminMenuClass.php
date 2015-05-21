<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:37 PM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


class AdminMenu extends MenuBase {

    function __construct($highlightItem = 'none')
    {
        //Set the item to highlight when the page is rendered out
        $this->highlightItem = $highlightItem;

        //Group One
        $this->menuItems[0][] = ['/images/icons/envelope.png', '#', 'Admin Messages'];
        $this->menuItems[0][] = ['/images/icons/envelope.png', '#', 'Account Requests'];
        $this->menuItems[0][] = ['/images/icons/envelope.png', '#', 'Send Message'];

        //Group Two
        $this->menuItems[1][] = ['/images/icons/user.png', '/pages/admin/useradmin.php', 'User Admin'];
        $this->menuItems[1][] = ['/images/icons/staff-pick.png', '#', 'Product Admin'];
    }
}