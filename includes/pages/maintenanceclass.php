<?php
/**
* Kendall Holm
* Created on 4/13/2015 at 9:01 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;
use includes\template;

class Maintenance extends template\TemplateBase {
    function __construct($title, $noTemplate = true, $maintenance = true)
    {
        parent::__construct($title, $noTemplate, $maintenance);
    }

    protected function body()
    {
        ?>

    <?php
    }

}