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

        //Add CSS
        $this->add_css('/stylesheets/maintenance.css');
    }

    protected function body()
    {
        ?>
        <div class="bubble-wrapper">
            <h1>Maintenance</h1>
            <div class="bubble-content">
                <div class="bubble-image-wrapper">
                    <img src="/images/QdinkaFull25.png" title="Qdinka" alt="Qdinka Logo"/>
                </div>
                <div class="bubble-wording-wrapper">
                    We are sorry but Qdinka is currently undergoing maintenance right now and we will be back up as soon as we can. We thank you for your patience.
                </div>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        return;
    }

}