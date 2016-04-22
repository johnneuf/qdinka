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

    public static $extraQuestion=$extraAnswer="";
    public static $radioNotification=NULL;
    public static $eqERR=$eaERR=$rnERR="";

    //borrowed function from UsersPageClass.php to clean user input
    public static function test_user_input($user_input)
    {
      $user_input=htmlspecialchars($user_input);
      user_input=trim($user_input);
      $user_input=stripslashes($user_input);
      return $user_input;
    }

    public static function validate_form_data($_SERVER["REQUEST_METHOD"])
    {
      if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
          if(empty($_POST["extraQuestion"]))
          {
            // self::$eqERR="Username required";
          }else
          {
            self::$extraQuestion=self::test_user_input($_POST["extraQuestion"]);
            if(!preg_match("/^[a-zA-Z0-9? -]*$/",$extraQuestion))
            {
              self::$eqERR="letters, numbers, dashes, question marks and white space allowed only";
            }
          }
          if(empty($_POST["extraAnswer"]))
          {
            // self::$eqERR="Username required";
          }else
          {
            self::$extraAnswer=self::test_user_input($_POST["extraAnswer"]);
            if(!preg_match("/^[a-zA-Z0-9? -]*$/",$extraAnswer))
            {
              self::$eqERR="letters, numbers, dashes, question marks and white space allowed only";
            }
          }
          if(!isset($_POST['radioNotification'])){
        		$rnERR = "Please select an option for notifications";
        	}
          else {
            if ($_POST['radioNotification']=="yes" && $_POST['radioNotification']!="no"){
              $radioNotification = true;
            }
            else if ($_POST['radioNotification']=="no" && $_POST['radioNotification']!="yes") {
              $radioNotification = false;
            }
            else {
              $rnERR = "Please select only one option for notifications"
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
                <div class="buyer-content-manage-account-security">
                    <div class="manage-account-security-wrapper">
                        <form action="" method="post">
                            <div class="subheader-form">Upon Sign-In, request an extra security question</div>
                            <div class="left-manage-account-wrapper">
                                <label for="extraQuestion">Q: </label>
                                <br />
                                <input type="text" name="extraQuestion" id="extraQuestion" />
                                <span class="error"><?php echo BuyerSecurityPage::eqERR ;?></span>
                            </div>
                            <div class="mid-manage-content-wrapper">
                                <label for="extraAnswer">A: </label>
                                <br />
                                <input type="text" name="extraAnswer" id="extraAnswer" />
                                <span class="error"><?php echo BuyerSecurityPage::eaERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper"><input type="submit" name="btnActivate" value="Activate" /></div>
                            <div class="subheader-form">Receive Notification if account is accessed from another device or browser</div>
                            <div class="left-manage-account-wrapper-notification">
                                    <label for="radioNotification">Yes </label>
                                    <br />
                                    <input type="radio" name="radioNotification" id="yes" value="yes" />
                                    <span class="error"><?php echo BuyerSecurityPage::rnERR ;?></span>
                            </div>
                            <div class="right-manage-content-wrapper-notification">
                                    <label for="radioNotification">No </label>
                                    <br />
                                    <input type="radio" name="radioNotification" id="no" value="no" />
                                    <span class="error"><?php echo BuyerSecurityPage::rnERR ;?></span>
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
