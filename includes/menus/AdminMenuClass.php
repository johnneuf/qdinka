<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 8:37 PM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


use includes\traits\MenuTrait;

class AdminMenu {

    use MenuTrait;

    function __construct($highlightItem = 'none')
    {
        $this->highlight = $highlightItem;

        //Menu Items

    }
}