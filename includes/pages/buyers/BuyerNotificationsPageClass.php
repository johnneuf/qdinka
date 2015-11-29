<?php
/**
* Nannalin Higgins
* Created on 10/31/2015 at 12:46 AM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerNotificationsPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerNotificationsLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php 
            include 'BuyerContentHead.php';
            include 'BuyerManageAccountContentBodyHead.php';
        ?>
   
                <div class="buyer-content-manage-account-notifications">
                    <div class="manage-account-notifications-wrapper">
                        <form action="" method="post">
                            <div class="subheader-form">Notify me via email when..</div>
                            <div class="multipleList">
                                <p><input type="checkbox" name="check_list[]" value="someone-message" />
                                <label>Someone messages me</label></p>
                                <p><input type="checkbox" name="check_list[]" value="order-shipped" />
                                <label>Orders are shipped</label></p>
                                <p><input type="checkbox" name="check_list[]" value="package-arriving" />
                                <label>Package is arriving</label></p>
                                <p><input type="checkbox" name="check_list[]" value="review-helpful" />
                                <label>My reviews are viewed as helpful</label></p>
                            </div>
                            
                            <div class="subheader-form">I would like to receive information about..</div>
                            <div class="multipleList">
                                <p><input type="checkbox" name="check_list[]" value="update-purchase" />
                                <label>Updates related to my recent purchases</label></p>
                                <p><input type="checkbox" name="check_list[]" value="post-product" />
                                <label>Recently posted products</label></p>
                                <p><input type="checkbox" name="check_list[]" value="shopping-tip" />
                                <label>Shopping tips and guidance</label></p>
                                <p><input type="checkbox" name="check_list[]" value="promotion" />
                                <label>Coupons and Promotions</label></p>
                                <p><input type="checkbox" name="check_list[]" value="purchase-wholesale" />
                                <label>Purchasing at wholesale</label></p>
                                <p><input type="submit" name="btnSubmit" value="Submit" /></p>
                            </div>                            
                        </form>
                        
                    </div>                   
                </div>   
            </div>             
        </div>
    </div>

        
        <!-- Buyer Bottom Area --->
        <?php include 'BuyerContentBottom.php'; ?>
        
    <?php    
    }
    
    protected function side_menu() {

    }   
}            