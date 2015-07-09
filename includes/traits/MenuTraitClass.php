<?php
/**
 * Created by PhpStorm.
 * User: Kendall
 * Date: 7/9/2015
 * Time: 7:38 AM
 */

namespace includes\traits;


trait MenuTrait
{
    protected $menuItems = array();
    protected $highlight;

    public function render()
    {
        echo '<div class="template-side-menu-content">';
        echo '<ul>';

        //Loop through all of the menu items and render them
        $count = count($this->menuItems);
        $current = 1;
        foreach ($this->menuItems as $key=>$value) {

            //Check to see if the highlight equals the key and if it is make it to where it is highlighted in the html
            if ($this->highlight == $key) {
                echo '<li class="menu-highlight"><a href="' . $value . '" >' . $key . '</a></li>';
            } else {
                echo '<li><a href="' . $value . '" >' . $key . '</a></li>';
            }

            //Put a hr between the menu items so long as it is not the last one
            if ($current < $count) {
                echo '<hr class="menu-break" />';
            }

            $current++;
        }

        echo '</ul></div>';

    }
}