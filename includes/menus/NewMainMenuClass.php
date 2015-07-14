<?php
/**
 * Created by PhpStorm.
 * User: Kendall
 * Date: 7/9/2015
 * Time: 8:06 AM
 */

namespace includes\menus;


use includes\traits\MenuTrait;

class NewMainMenu
{
    use MenuTrait;

    function __construct($highlightName = 'none')
    {
        $this->highlight = $highlightName;

        $this->menuItems = [
            'All Products'=>'/pages/frontpage/home.php?title=All Products',
            'Accessories'=>'/pages/frontpage/home.php?title=Accessories',
            'Apparel'=>'/pages/frontpage/home.php?title=Apparel',
            'Camera'=>'/pages/frontpage/home.php?title=Camera',
            'Film/Video'=>'/pages/frontpage/home.php?title=Film/Video',
            'Gaming'=>'/pages/frontpage/home.php?title=Gaming',
            'Home Living'=>'/pages/frontpage/home.php?title=Home Living',
            'Misc. Tech'=>'/pages/frontpage/home.php?title=Misc. Tech',
            'Out-Doors'=>'/pages/frontpage/home.php?title=Out-Doors',
            'Phones and Tablets'=>'/pages/frontpage/home.php?title=Phones and Tablets',
            'Sports'=>'/pages/frontpage/home.php?title=Sports'
        ];
    }

}