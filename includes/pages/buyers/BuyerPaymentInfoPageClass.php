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

    public static $cardNumber=$expirationMonth=$expirationYear=$cvvNumber=$streetAddress=$city=$state=$zipcode=$country="";
    public static $cardNumberERR=$expirationMonthERR=$expirationYearERR=$cvvNumberERR=$streetAddressERR=$cityERR=$stateERR=$zipcodeERR=$countryERR="";

    public static function test_user_input($user_input)
    {
      $user_input=htmlspecialchars($user_input);
      user_input=trim($user_input);
      $user_input=stripslashes($user_input);
      return $user_input;
    }

    //borrowed function from UsersPageClass.php to validate form data
    public static function validate_form_data($_SERVER["REQUEST_METHOD"])
    {
      if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if(empty($_POST["cardNumber"]))
          {
            self::$cardNumberERR="Card number required";
          }else
          {
            self::$cardNumber=self::test_user_input($_POST["cardNumber"]);
            if(!preg_match("/^\d{12}$/",$cardNumber))
            {
              self::$cardNumberERR="only numbers required (no dashes or spaces)";
            }
          }
          if(empty($_POST["expirationMonth"]))
          {
            self::$expirationMonthERR="expiration month required";
          }else {
            //Password validation here'
              self::$expirationMonth=self::test_user_input($_POST["expirationMonth"]);
              if(!preg_match("/^\d{2}$/",$expirationMonth))
              {
                self::$cardNumberERR="only numbers required (no dashes or spaces)";
              }
          }
          if(empty($_POST["expirationYear"]))
          {
            self::$expirationYearERR="expiration year required";
          }else {
            //Password validation here'
              self::$expirationYear=self::test_user_input($_POST["expirationYear"]);
              if(!preg_match("/^\d{2}$/",$expirationYear))
              {
                self::$cardNumberERR="only numbers required (no dashes or spaces)";
              }
          }
          if(empty($_POST["cvvNumber"]))
          {
            self::$cvvNumberERR="expiration year required";
          }else {
            //Password validation here'
              self::$cvvNumber=self::test_user_input($_POST["cvvNumber"]);
              if(!preg_match("/^\d{3,4}$/",$cvvNumber))
              {
                self::$cardNumberERR="only numbers required (no dashes or spaces)";
              }
          }
          if(empty($_POST["streetAddress"]))
          {
            self::$sqERR="street address required for billing purposes";
          }else
          {
            self::$streetAddress=self::test_user_input($_POST["streetAddress"]);
            if(!preg_match("/^\d+ [a-zA-Z0-9 -]+$/",$streetAddress))
            {
              self::$streetAddressERR="please enter a valid address, and remove fullstops/dots/periods";
            }
          }
          if(empty($_POST["city"]))
          {
            self::$cityERR="city required for billing purposes";
          }else
          {
            self::$city=self::test_user_input($_POST["city"]);
            if(!preg_match("/^[a-zA-Z -]+$/",$city))
            {
              self::$streetAddressERR="only letters, white space and dashes allowed";
            }
          }
          if(empty($_POST["state"]))
          {
            self::$stateERR="state required for billing purposes";
          }else
          {
            self::$city=self::test_user_input($_POST["city"]);
            if(!preg_match("/^[a-zA-Z]{2}$/",$city))
            {
              self::$streetAddressERR="please enter the two letter state code";
            }
          }
          if(empty($_POST["country"]))
          {
            self::$countryERR="country required for billing purposes";
          }else
          {
            self::$country=self::test_user_input($_POST["country"]);
            if(!preg_match("/^[a-zA-Z -]+$/",$city))
            {
              self::$streetAddressERR="only letters, white space and dashes allowed";
            }
          }
          if(empty($_POST["email"]))
          {
            self::$emailERR="email required";
          }else
          {
            self::$email=self::test_user_input($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
              self::$emailERR="invalid email format";
            }
          }
          if(empty($_POST["zipcode"]))
          {
            self::$zipcodeERR="zipcode required";
          }else
          {
            self::$zipcode=self::test_user_input($_POST["zipcode"]);
            if(!preg_match("/^[0-9 -]*$/",$zipcode))
            {
              self::$zipcodeERR="only numbers, dashes and white space are allowed";
            }
          }
        }
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
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="name">Name on Card:</label>
                                <br />
                                <input type="text" name="name" id="name" />
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="cardNumber">Number on Card:</label>
                                <br />
                                <input type="number" name="cardNumber" id="cardNumber" />
                                <span class="error">*<?php echo UsersPage::$cardNumberERR;?></span>
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="expiration">Expiration:</label>
                                <br />
                                <div class="expiration-number">
                                    <input type="number" name="expirationMonth" id="expirationMonth" maxlength="2" />
                                    <span class="expiration-number-form">
                                        <input type="number" name="expirationYear" id="expirationYear" maxlength="4" />
                                    </span></div>
                                    <span class="error">*<?php echo UsersPage::$expirationMonthERR;?></span>
                                    <span class="error">*<?php echo UsersPage::$expirationYearERR;?></span>
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="cvvNumber">CVV: <span class="subheading">(number on back of card)</span></label>
                                <br />
                               <input type="number" name="cvvNumber" id="cvvNumber" />
                               <span class="error">*<?php echo UsersPage::$cvvNumberERR;?></span>
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="streetAddress">Street Address:</label>
                                <br />
                                <input type="text" name="streetAddress" id="streetAddress" />
                                <span class="error">*<?php echo UsersPage::$streetAddressERR;?></span>
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="city">City:</label>
                                <br />
                               <input type="text" name="city" id="city" />
                               <span class="error">*<?php echo UsersPage::$cityERR;?></span>
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                               <label for="state">State:</label>
                                <br />
                                <input type="text" name="state" id="state" />
                                <span class="error">*<?php echo UsersPage::$stateERR;?></span>
                            </div>
                            <div class="right-manage-content-paymentInfo-wrapper">
                                <label for="zipcode">Zip Code:</label>
                                <br />
                                <input type="number" name="zipcode" id="zipcode" />
                                <span class="error">*<?php echo UsersPage::$zipcodeERR;?></span>
                            </div>
                            <div class="left-manage-account-paymentInfo-wrapper">
                                <label for="country">Country:</label>
                                <br />
                                <input type="text" name="country" id="country" />
                                <span class="error">*<?php echo UsersPage::$countryERR;?></span>
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
