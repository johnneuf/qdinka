<?php
/**
* Kendall Holm
* Created on 4/17/2015 at 10:53 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


class MainMenu extends MenuBase {
    function __construct()
    {
        // Define all of the menus
        $this->menuItems[0][] = ['/images/icons/all-products.png', '', 'All Products'];
        $this->menuItems[0][] = ['/images/icons/Accessories.png', '', 'Accessories'];
        $this->menuItems[0][] = ['/images/icons/Apparel.png', '', 'Apparel'];
        $this->menuItems[0][] = ['/images/icons/video-film.png', '', 'Film/Video'];
        $this->menuItems[0][] = ['/images/icons/games.png', '', 'Games'];
        $this->menuItems[0][] = ['/images/icons/home.png', '', 'Home Living'];
        $this->menuItems[0][] = ['/images/icons/sports.png', '', 'Sports'];
        $this->menuItems[0][] = ['/images/icons/technology.png', '', 'Technology'];

        //Group Two
        $this->menuItems[1][] = ['/images/icons/fastest.png', '', 'Fastest Selling'];
        $this->menuItems[1][] = ['/images/icons/recent.png', '', 'Recently Added'];
        $this->menuItems[1][] = ['/images/icons/staff-pick.png', '', 'Staff Picks'];

    }
}