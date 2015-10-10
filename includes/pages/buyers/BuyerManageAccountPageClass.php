<?php
/**
* Nannalin Higgins
* Created on 10/04/2015 at 11:30 AM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerManageAccountPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerManageAccountLayout.css');

    }

    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-wrapper">
                <h2>Manage Account Details - </h2>
                <div class="buyer-content-menu-detail">
                    View, edit, and update your account information. 
                    Make all information sound and accurate so sellers may smoothly fufil your orders.                
                </div>
            </div>
            
            <div class="buyer-content-body">
                <div class="subheader-wrapper">
                    <ul class="subheader-nav">
                        <li><a href="#">Personal Info</a></li>
                        <li><a href="#">Payment Info</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Seller Profile</a></li>
                    </ul>
                </div>                
                
                <div class="buyer-content-manage-account">
                    <div class="manage-account-wrapper">
                        <form action="" method="post">
                            <div class="subheader-form">Log-in's</div>
                            <div class="left-manage-account-wrapper">
                                <label for="username">UserName:</label>
                                <br />
                                <input type="text" name="username" id="username" />
                                <div class="form-detail">Must be a minimum of 6 characters long. No symbols or numbers. Case Sensative.</div>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="password">Password:</label>
                                <br />
                                <input type="password" name="password" id="password" />
                                <div class="form-detail">Must be a minimum of 6 characters long, and contain a minimum of one symbol, one uppercase letter, and one number.</div>
                            </div>
                            <div class="full-manage-content-wrapper">
                                <label for="security-question">Security Question:</label>
                                <br />
                                <input type="text" name="security-question" id="security-question" />
                                <div class="form-detail">Examples: Whats the name of your favorite pet? Who is your best friend? Whats your favorite color? Etc.</div>
                            </div>
                            <div class="sub-manage-content-wrapper">
                                <label for="answer">Answer:</label>
                                <br />
                                <input type="text" name="answer" id="answer" />
                            </div>
                            <div class="dash-line"></div>
                            
                            <div class="subheader-form">Contact Info</div>
                            <div class="left-manage-account-wrapper">
                                <label for="firstname">First Name:</label>
                                <br />
                                <input type="text" name="firstname" id="firstname" />
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="lastname">Last Name:</label>
                                <br />
                               <input type="text" name="lastname" id="lastname" />
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="email">Email:</label>
                                <br />
                                <input type="email" name="email" id="email" />
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="phone-number">Phone Number:</label>
                                <br />
                                <div class="input-phone-number">
                                    <input type="tel" name="phone-number-part1" id="phone-number-part1" maxlength="3" /><span class="phone-number-form"> - 
                                        <input type="tel" name="phone-number-part2" id="phone-number-part2" maxlength="3" /> - 
                                        <input type="tel" name="phone-number-part3" id="phone-number-part3" maxlength="4" />
                                    </span></div>
                            </div>
                            <div class="dash-line"></div>
                            
                            <div class="subheader-form">Shipping Info</div>
                            <div class="left-manage-account-wrapper">
                                <label for="mail-address">Mailing Address:</label>
                                <br />
                                <input type="text" name="mail-address" id="mail-address" />
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="city">City:</label>
                                <br />
                               <input type="text" name="city" id="city" />
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="state">State:</label>
                                <br />
                                <input type="text" name="state" id="state" />
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="zipcode">Zip Code:</label>
                                <br />
                                <input type="number" name="zipcode" id="zipcode" />
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="special-direction">Special Direction:
                                   <span class="form-special-detail">This is for the carrier. You might include gate codes, drop boxes, etc.</span></label>
                                <br />
                                <input type="text" name="special-direction" id="special-direction" />
                            </div>
                            <div class="right-manage-content-wrapper">
                                <textarea name="txtComments" id="txtComments"></textarea>
                                <?php
                                if (CAPTCHA_ENABLED) {
                                    echo '<div class="g-recaptcha" data-sitekey="' . CAPTCHA_SITE_KEY . '"></div>';
                                }
                                ?>
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