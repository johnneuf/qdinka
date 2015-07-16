<?php
/**
* Kendall Holm
* Created on 5/4/2015 at 10:19 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\NewMainMenu;
use includes\modules\SearchModule;
use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    protected function body()
    {

    }

    protected function side_menu()
    {
        echo '<div class="menu-top"><a href="#" >Start Selling Today</a></div>';

        $searchBubble = new SearchModule();
        $searchBubble->render();
    }

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/layout.css');
    }

}