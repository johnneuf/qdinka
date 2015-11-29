<?php
/**
* Nannalin Higgins
* Created on 11/12/2015 at 10:50 PM
* @email nannalin14@gmail.com
*/

namespace includes\pages\buyers;

use includes\template\TemplateBase;

class BuyerMessageManagerPage extends TemplateBase {
    function __construct($title, $noTemplate = false, $maintenance = false) {
        parent::__construct($title, $noTemplate, $maintenance);

        //CSS
        $this->add_css('/stylesheets/buyerMessageManagerLayout.css');

    }

    protected function body() {
?>

        <!--- Buyer Header area --->
        <?php include 'BuyerContentHead.php'; ?>

            <!--- Buyer Body area --->
            <div class="buyer-content-menu-messages-wrapper">
                <h2>Message Manager - </h2>
                <div class="buyer-content-menu-messages-detail">
                    Comunicate both sellers, and other buyers when making any buying desicions Check your messages to be sure your not missing valuable communications               
                </div>
            </div>
            
            <div class="buyer-content-body">
                <div class="message-manager-header-wrapper">
                    <div class="first-header-message-manager">
                        <input type="submit" name="" value="Send" />
                    </div>
                    <div class="second-header-messages-manager">
                        <input type="button" name="btnAllMessages" value="All Messages" />
                    </div>
                    <div class="third-header-messages-manager">
                        <input type="button" name="btnArchive" value="Archive" />
                    </div>
                    <div class="fourth-header-messages-manager">
                        <input type="button" name="btnTrash" value="Trash" />
                    </div>
                    <div class="fifth-header-messages-manager">
                        <input type="checkbox" name="btnSelect" />
                    </div>                    
                </div> 
                
                <div class="message-manager-body-wrapper-left">
                    <ul>
                        <li class="messages"><a href="#">Messages ( <span class="message-number">111</span> )</a></li>
                        <li class="sent"><a href="#">Sent ( <span class="sent-number">111</span> )</a></li>
                        <li class="archive"><a href="#">Archive</a></li>
                        <li class="trash"><a href="#">Trash</a></li>
                    </ul> 
                    
                    <div class="template-search-bar-wrapper-small">
                        <form action method="post">
                            <input type="text" name="txtSearch" placeholder="Search">
                            <input type="image" name="btnSubmit" src="../../../images/icons/search.png">
                        </form>
                    </div>
                </div>
                
                <div class="message-manager-body-wrapper-right">
                    <div class="account-image-wrapper">
                        <img src="/images/icons/user.png" />
                    </div> 
                    <div class="message-wrapper">
                        <div class="message-wrapper-top">
                            <div class="message-wrapper-top-left">
                            <div class="sellerDetail">
                                <span class="sellerAccountName"> Seller Account Name</span> - <span id="sellerCompanyName">Seller Comapany Name </span>
                            </div>
                            <div>Total Sales: <span id="totSales">Number</span></div>
                            <div>Listed Products: <span id="listedPtoducts">Number</span></div>
                            </div>
                            <div class="message-wrapper-top-right">
                                <div class="date">June 08, 2015
                                <span class="select-button"><input type="checkbox" name="btnSelect" ></span>
                            </div>
                                </div>
                        </div>

                        <div class="message-wrapper-bottom">
                            <div class="message-header">
                                <a href="#">Drop Shipping Your Product - How much?</a>
                            </div>
                            <div class="message-content">
                                Not too many between 2000 and 3000 absolutely FREE .  You just need to send me your email, skype and phone to get them. No obligation No credit card required I...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="message-manager-body-wrapper-right">
                    <div class="account-image-wrapper">
                        <img src="/images/icons/user.png" />
                    </div> 
                    <div class="message-wrapper">
                        <div class="message-wrapper-top">
                            <div class="message-wrapper-top-left">
                            <div class="sellerDetail">
                                <span class="sellerAccountName"> Seller Account Name</span> - <span id="sellerCompanyName">Seller Comapany Name </span>
                            </div>
                            <div>Total Sales: <span id="totSales">Number</span></div>
                            <div>Listed Products: <span id="listedPtoducts">Number</span></div>
                            </div>
                            <div class="message-wrapper-top-right">
                                <div class="date">June 08, 2015
                                <span class="select-button"><input type="checkbox" name="btnSelect" ></span>
                            </div>
                                </div>
                        </div>

                        <div class="message-wrapper-bottom">
                            <div class="message-header">
                                <a href="#">Drop Shipping Your Product - How much?</a>
                            </div>
                            <div class="message-content">
                                Not too many between 2000 and 3000 absolutely FREE .  You just need to send me your email, skype and phone to get them. No obligation No credit card required I...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="message-manager-body-wrapper-right">
                    <div class="account-image-wrapper">
                        <img src="/images/icons/user.png" />
                    </div> 
                    <div class="message-wrapper">
                        <div class="message-wrapper-top">
                            <div class="message-wrapper-top-left">
                            <div class="sellerDetail">
                                <span class="sellerAccountName"> Seller Account Name</span> - <span id="sellerCompanyName">Seller Comapany Name </span>
                            </div>
                            <div>Total Sales: <span id="totSales">Number</span></div>
                            <div>Listed Products: <span id="listedPtoducts">Number</span></div>
                            </div>
                            <div class="message-wrapper-top-right">
                                <div class="date">June 08, 2015
                                <span class="select-button"><input type="checkbox" name="btnSelect" ></span>
                            </div>
                                </div>
                        </div>

                        <div class="message-wrapper-bottom">
                            <div class="message-header">
                                <a href="#">Drop Shipping Your Product - How much?</a>
                            </div>
                            <div class="message-content">
                                Not too many between 2000 and 3000 absolutely FREE .  You just need to send me your email, skype and phone to get them. No obligation No credit card required I...
                                <span class="full-review"><a href="#">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div> 
            
            <!--        Bottom Paginator-->
            <div class="subview-bottom-paginate-wrapper">
                <div class="subview-bottom-paginate">
                    <span class="deactivated-link">< previous page </span><span class="active-link">1 2 3</span> . . .
                    <span class="active-link"> next page ></span>
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