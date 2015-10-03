<?php
/**
* Nannalin Higgins
* Created on 09/14/2015 at 10:50 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerMessageManagerPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerMyordersLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            
    <?php    
    }
    
    protected function side_menu() {

    }   
}                    