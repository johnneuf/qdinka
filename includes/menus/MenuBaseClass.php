<?php
/**
* Kendall Holm
* Created on 4/17/2015 at 10:16 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


abstract class MenuBase {
    protected $menuItems = array(); //Group -> Item -> [icon link, link, name]

    abstract function __construct();

    function __toString()
    {
        $outputString = '';

        // Loop through and render items
        foreach ($this->menuItems as $group) {
            $outputString .= '<div class="template-side-menu-content">';
            $outputString .= '<ul>';

            foreach ($group as $item) {
                list($icon, $link, $name) = $item;
                $outputString .= '<li><a href="' . $link . '"><img src="' . $icon . '" alt="' . $name .'" /> ' . $name . '</a></li>';
            }

            $outputString .= '</ul>';
            $outputString .= '</div>';

        }

        return $outputString;

    }

}