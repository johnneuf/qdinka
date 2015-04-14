<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 8:07 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\frontpage;


use includes\template\TemplateBase;

class FrontPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);
    }

    protected function body()
    {
        echo 'weeeeee';
    }

    protected function side_bar()
    {
        $this->side_menu();
    }

}