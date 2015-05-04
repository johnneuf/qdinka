<?php
/**
* Kendall Holm
* Created on 4/17/2015 at 10:16 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\menus;


abstract class MenuBase {
    protected $menuItems = array(); //Group -> Item -> [icon link, link, name]
    protected $highlightItem = 'none';

    abstract function __construct($highlightItem = 'none');

    function __toString()
    {
        $outputString = '';

        // Loop through and render items
        foreach ($this->menuItems as $group) {
            $outputString .= '<div class="template-side-menu-content">';
            $outputString .= '<ul>';

            foreach ($group as $item) {
                list($icon, $link, $name) = $item;

                //Check to see if the highlight is being used for the menu item
                if ($this->highlightItem == $name) {
                    $outputString .= '<li><a class="menu-highlight" href="' . $link . '"><img src="' . $icon . '" alt="' . $name .'" /> ' . $name . '</a></li>';
                } else {
                    $outputString .= '<li><a href="' . $link . '"><img src="' . $icon . '" alt="' . $name .'" /> ' . $name . '</a></li>';
                }
            }

            $outputString .= '</ul>';
            $outputString .= '</div>';

        }

        return $outputString;

    }

}