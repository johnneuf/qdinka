<?php
/**
* Nannalin Higgins
* Created on 11/04/2015 at 11:30 AM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerSecurityPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerSecurityLayout.css');
    }
    
    protected function body() {
?>
        <!--- Buyer Header area --->
        <?php 
            include 'BuyerContentHead.php';
            include 'BuyerManageAccountContentBodyHead.php';
        ?>               
                <div class="buyer-content-manage-account-security">
                    <div class="manage-account-security-wrapper">
                        <form action="" method="post">
                            <div class="subheader-form">Upon Sign-In, request an extra security question</div>
                            <div class="left-manage-account-wrapper">
                                <label for="question">Q: </label>
                                <br />
                                <input type="text" name="question" id="question" />
                            </div>
                            <div class="mid-manage-content-wrapper">
                                <label for="answer">A: </label>
                                <br />
                                <input type="answer" name="answer" id="answer" />
                            </div>
                            <div class="right-manage-content-wrapper"><input type="submit" name="btnActivate" value="Activate" /></div>
                            <div class="subheader-form">Receive Notification if account is accessed from another device or browser</div>
                            <div class="left-manage-account-wrapper-notification">
                                    <label for="notification">Yes </label>
                                    <br />
                                    <input type="radio" name="get-notification" id="yes" />
                            </div>
                            <div class="right-manage-content-wrapper-notification">
                                    <label for="notification">No </label>
                                    <br />
                                    <input type="radio" name="get-notification" id="no" />
                            </div>
                            <div class="subheader-form">Sign-In History</div>
                            <table class="table-sign-in-history" border="1">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Accessed Via</th>
                                        <th>IP</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
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
           