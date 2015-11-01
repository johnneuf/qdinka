<?php
/**
* Nannalin Higgins
* Created on 10/04/2015 at 11:30 AM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerPaymentInfoPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerPaymentInfoLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php 
            include 'BuyerContentHead.php';
            include 'BuyerManageAccountContentBodyHead.php';
        ?>               
                <div class="buyer-content-manage-account-paymentInfo">
                    <div class="manage-account-paymentInfo-wrapper">
                        <form action="" method="post">
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="name">Name on Card:</label>
                                <br />
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="cardNumber">Number on Card:</label>
                                <br />
                                <input type="number" name="cardNumber" id="cardNumber" />
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="expiration">Expiration:</label>
                                <br />
                                <div class="expiration-number">
                                    <input type="number" name="expirationMonth" id="expirationMonth" maxlength="2" />
                                    <span class="expiration-number-form"> 
                                        <input type="number" name="expirationYear" id="expirationYear" maxlength="4" /> 
                                    </span></div>
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="cvv-number">CVV: <span class="subheading">(number on back of card)</span></label>
                                <br />
                               <input type="number" name="number" id="cvv-number" />
                            </div>     
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="billing-address">Billing Address:</label>
                                <br />
                                <input type="text" name="billing-address" id="billing-address" />
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="city">City:</label>
                                <br />
                               <input type="text" name="city" id="city" />
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                               <label for="state">State:</label>
                                <br />
                                <input type="text" name="state" id="state" />
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="zipcode">Zip Code:</label>
                                <br />
                                <input type="number" name="zipcode" id="zipcode" />
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="country">Country:</label>
                                <br />
                                <input type="text" name="country" id="country" />
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <input type="submit" name="btnSubmit" value="Verify and Submit" />
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