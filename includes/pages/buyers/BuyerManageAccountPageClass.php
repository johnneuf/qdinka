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

    public static $username=$password=$securityQuestion=$securityAnswer=$firstname=$lastname=$email=$phoneNumberP1=$phoneNumberP2=$phoneNumberP3=$fullPhoneNumber=$mailAddress=$city=$state=$zipcode=$specialDirection="";
    public static $unERR=$passERR=$sqERR=$saERR=$fnERR=$lnERR=$pnERR=$emailERR=$maERR=$cityERR=$stateERR=$zcERR=$sdERR="";

    //borrowed function from UsersPageClass.php to clean user input
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
          if(empty($_POST["username"]))
          {
            self::$unERR="Username required";
          }else
          {
            self::$username=self::test_user_input($_POST["username"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$username))
            {
              self::$unERR="letter and white space allowed only";
            }
          }
          if(empty($_POST["password"]))
          {
            self::$passERR="password required";
          }else {
            //Password validation here'
              self::$password=self::test_user_input($_POST["password"]);
          }
          if(empty($_POST["securityQuestion"]))
          {
            self::$sqERR="security question required";
          }else
          {
            self::$securityQuestion=self::test_user_input($_POST["securityQuestion"]);
            if(!preg_match("/^[a-zA-Z0-9? -]*$/",$securityQuestion))
            {
              self::$sqERR="letters, numbers, dashes, question marks and white space allowed only";
            }
          }
          if(empty($_POST["securityAnswer"]))
          {
            self::$saERR="security answer required";
          }else
          {
            self::$securityAnswer=self::test_user_input($_POST["securityAnswer"]);
            if(!preg_match("/^[a-zA-Z0-9 -]*$/",$securityAnswer))
            {
              self::$saERR="letters, numbers, dashes and white space allowed only";
            }
          }
          if(empty($_POST["firstname"]))
          {
            self::$fnERR="first name required";
          }else
          {
            self::$firstname=self::test_user_input($_POST["firstname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$firstname))
            {
              self::$fnERR="only letters and white space are allowed";
            }
          }
          if(empty($_POST["lastname"]))
          {
            self::$lnERR="last name required";
          }else
          {
            self::$lastname=self::test_user_input($_POST["lastname"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$lastname))
            {
              self::$lnERR="only letters and white space are allowed";
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
          if(empty($_POST["phoneNumberP1"]) && empty($_POST["phoneNumberP2"]) && empty($_POST["phoneNumberP3"]))
          {

          } else
          {
            self::$phoneNumberP1=self::test_user_input($_POST["phoneNumberP1"]);
            self::$phoneNumberP2=self::test_user_input($_POST["phoneNumberP2"]);
            self::$phoneNumberP3=self::test_user_input($_POST["phoneNumberP3"]);
            if(!preg_match("/^[0-9]*$/",$phoneNumberP1) && !preg_match("/^[0-9]*$/",$phoneNumberP2) && !preg_match("/^[0-9]*$/",$phoneNumberP3))
            {
              self::$pnERR="only numbers are allowed in phone number fields";
            }
            else {
              $pnLength = strlen($phoneNumberP1) + strlen($phoneNumberP2) + strlen($phoneNumberP3);
              if ($pnLength != 10){
                self::$pnERR="please enter a valid phone number"
              }
              else {
                $fullPhoneNumber = $phoneNumberP1.$phoneNumberP2.$phoneNumberP3;
              }
            }
          }else
          {
            self::$email=self::test_user_input($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
              self::$emailERR="invalid email format";
            }
          }
          if(empty($_POST["mailAddress"]))
          {
            self::$lnERR="mailing address required";
          }else
          {
            self::$mailAddress=self::test_user_input($_POST["mailAddress"]);
            if(!preg_match("/^[a-zA-Z0-9# -]*$/",$mailAddress))
            {
              self::$lnERR="only letters and white space are allowed";
            }
          }
          if(empty($_POST["city"]))
          {
            self::$cityERR="city required";
          }else
          {
            self::$city=self::test_user_input($_POST["city"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$city))
            {
              self::$cityERR="only letters and white space are allowed";
            }
          }
          if(empty($_POST["state"]))
          {
            self::$stateERR="state required";
          }else
          {
            self::$state=self::test_user_input($_POST["state"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$state))
            {
              self::$stateERR="only letters and white space are allowed";
            }
          }
          if(empty($_POST["zipcode"]))
          {
            self::$zcERR="zipcode required";
          }else
          {
            self::$zipcode=self::test_user_input($_POST["zipcode"]);
            if(!preg_match("/^[0-9 -]*$/",$zipcode))
            {
              self::$zcERR="only numbers, dashes and white space are allowed";
            }
          }
          if(empty($_POST["specialDirection"]))
          {
            //Not required
          }else
          {
            self::$specialDirection=self::test_user_input($_POST["specialDirection"]);
            if(!preg_match("/^[a-zA-Z0-9?!,\. -]*$/",$specialDirection))
            {
              self::$sdERR="letters, numbers, non-colon punctuation and white space allowed only";
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
                <div class="buyer-content-manage-account">
                    <div class="manage-account-wrapper">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ;?>" method="post">
                            <div class="subheader-form">Log-in's</div>
                            <div class="left-manage-account-wrapper">
                                <label for="username">UserName:</label>
                                <br />
                                <input type="text" name="username" id="username" value="<?php echo BuyerManageAccountPage::username ;?>"/>
                                <div class="form-detail">Must be a minimum of 6 characters long. No symbols or numbers. Case Sensative.</div>
                                <span class="error">*<?php echo BuyerManageAccountPage::unERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="password">Password:</label>
                                <br />
                                <input type="password" name="password" id="password" value="<?php echo BuyerManageAccountPage::password ;?>"/>
                                <div class="form-detail">Must be a minimum of 6 characters long, and contain a minimum of one symbol, one uppercase letter, and one number.</div>
                                <span class="error">*<?php echo BuyerManageAccountPage::passERR ;?></span>
                            </div>
                            <div class="full-manage-content-wrapper">
                                <label for="security-question">Security Question:</label>
                                <br />
                                <input type="text" name="securityQuestion" id="securityQuestion" value="<?php echo BuyerManageAccountPage::securityQuestion ;?>"/>
                                <div class="form-detail">Examples: Whats the name of your favorite pet? Who is your best friend? Whats your favorite color? Etc.</div>
                                <span class="error">*<?php echo BuyerManageAccountPage::sqERR ;?></span>
                            </div>
                            <div class="sub-manage-content-wrapper">
                                <label for="answer">Answer:</label>
                                <br />
                                <input type="text" name="securityAnswer" id="securityAnswer" value="<?php echo BuyerManageAccountPage::securityAnswer ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::saERR ;?></span>
                            </div>
                            <div class="dash-line"></div>

                            <div class="subheader-form">Contact Info</div>
                            <div class="left-manage-account-wrapper">
                                <label for="firstname">First Name:</label>
                                <br />
                                <input type="text" name="firstname" id="firstname" value="<?php echo BuyerManageAccountPage::firstname ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::fnERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="lastname">Last Name:</label>
                                <br />
                               <input type="text" name="lastname" id="lastname" value="<?php echo BuyerManageAccountPage::lastname ;?>"/>
                               <span class="error">*<?php echo BuyerManageAccountPage::lnERR ;?></span>
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="email">Email:</label>
                                <br />
                                <input type="email" name="email" id="email" value="<?php echo BuyerManageAccountPage::email ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::emailERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="phone-number">Phone Number:</label>
                                <br />
                                <div class="input-phone-number">
                                    <input type="tel" name="phoneNumberP1" id="phoneNumberP1" maxlength="3" value="<?php echo BuyerManageAccountPage::phoneNumberP1 ;?>"/><span class="phone-number-form"> -
                                        <input type="tel" name="phoneNumberP2" id="phoneNumberP2" maxlength="3" value="<?php echo BuyerManageAccountPage::phoneNumberP2 ;?>"/> -
                                        <input type="tel" name="phoneNumberP3" id="phoneNumberP3" maxlength="4" value="<?php echo BuyerManageAccountPage::phoneNumberP3 ;?>"/>
                                    </span>
                                    <span class="error">*<?php echo BuyerManageAccountPage::pnERR ;?></span>
                                  </div>
                            </div>
                            <div class="dash-line"></div>

                            <div class="subheader-form">Shipping Info</div>
                            <div class="left-manage-account-wrapper">
                                <label for="mail-address">Mailing Address:</label>
                                <br />
                                <input type="text" name="mailAddress" id="mailAddress" value="<?php echo BuyerManageAccountPage::mailAddress ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::maERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="city">City:</label>
                                <br />
                               <input type="text" name="city" id="city" value="<?php echo BuyerManageAccountPage::city ;?>"/>
                               <span class="error">*<?php echo BuyerManageAccountPage::cityERR ;?></span>
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="state">State:</label>
                                <br />
                                <input type="text" name="state" id="state" value="<?php echo BuyerManageAccountPage::state ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::stateERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper">
                                <label for="zipcode">Zip Code:</label>
                                <br />
                                <input type="number" name="zipcode" id="zipcode" value="<?php echo BuyerManageAccountPage::zipcode ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::zcERR ;?></span>
                            </div>
                            <div class="left-manage-account-wrapper">
                               <label for="special-direction">Special Direction:
                                   <span class="form-special-detail">This is for the carrier. You might include gate codes, drop boxes, etc.</span></label>
                                <br />
                                <input type="text" name="specialDirection" id="specialDirection" value="<?php echo BuyerManageAccountPage::specialDirection ;?>"/>
                                <span class="error">*<?php echo BuyerManageAccountPage::sdERR ;?></span>
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
