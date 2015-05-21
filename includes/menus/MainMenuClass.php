<?php
/**
* Kendall Holm
* Created on 4/17/2015 at 10:53 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


class MainMenu extends MenuBase {
    function __construct($highlightItem = 'none')
    {
        // Define all of the menus
        $this->menuItems[0][] = ['/images/icons/all-products.png', '/pages/frontpage/home.php?title=All Products', 'All Products'];
        $this->menuItems[0][] = ['/images/icons/Accessories.png', '/pages/frontpage/home.php?title=Accessories', 'Accessories'];
        $this->menuItems[0][] = ['/images/icons/Apparel.png', '/pages/frontpage/home.php?title=Apparel', 'Apparel'];
        $this->menuItems[0][] = ['/images/icons/video-film.png', '/pages/frontpage/home.php?title=Film/Video', 'Film/Video'];
        $this->menuItems[0][] = ['/images/icons/games.png', '/pages/frontpage/home.php?title=Games', 'Games'];
        $this->menuItems[0][] = ['/images/icons/home.png', '/pages/frontpage/home.php?title=Home Living', 'Home Living'];
        $this->menuItems[0][] = ['/images/icons/sports.png', '/pages/frontpage/home.php?title=Sports', 'Sports'];
        $this->menuItems[0][] = ['/images/icons/technology.png', '/pages/frontpage/home.php?title=Technology', 'Technology'];

        //Group Two
        $this->menuItems[1][] = ['/images/icons/fastest.png', '/pages/frontpage/home.php?title=Fastest Selling', 'Fastest Selling'];
        $this->menuItems[1][] = ['/images/icons/recent.png', '/pages/frontpage/home.php?title=Recently Added', 'Recently Added'];
        $this->menuItems[1][] = ['/images/icons/staff-pick.png', '/pages/frontpage/home.php?title=Staff Picks', 'Staff Picks'];

        //Add the highlight
        $this->highlightItem = $highlightItem;
    }
}