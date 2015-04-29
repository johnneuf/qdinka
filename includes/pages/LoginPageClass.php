<?php
/**
* Kendall Holm
* Created on 4/29/2015 at 9:17 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;
use includes\users\AuthenticationUtil;

class LoginPage extends TemplateBase {

    function __construct($title, $noTemplate = false, $maintenance = false)
    {
        parent::__construct($title, $noTemplate, $maintenance);

        $this->add_css('/stylesheets/loginout.css');
    }

    protected function body()
    {
        $message = $this->post();
        ?>
        <div class="main-wrapper">
            <div class="login-wrapper">
                <h1>Login</h1>
                <?php if ($message) {
                    echo $message;
                } ?>
                <div class="login-content-wrapper">
                    <form action="" method="post">
                        <label for="txtEmail">Email:</label><br/>
                        <input type="email" name="txtEmail" id="txtEmail"/>
                        <br/>
                        <label for="txtPassword">Password:</label><br/>
                        <input type="password" name="txtPassword" id="txtPassword"/>

                        <div class="bottom-button-wrapper">
                            <input type="submit" name="txtRegister" value="Register" />
                            <input type="submit" name="txtLogin" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }

    protected function side_menu()
    {
        $menu = new MainMenu();
        echo $menu;
    }

    private function post()
    {
        //Check to see what button was pressed
        if (param('txtLogin')) {

            //Check to make sure that everything is filled out
            if (param('txtEmail') && param('txtPassword')) {
                $result = AuthenticationUtil::login(param('txtEmail'), param('txtPassword'));

                //Check to see if the login succeeded
                if ($result) {
                    return '<h3>Login Failed: ' . $result . '</h3>';

                } else {
                    header('Location: /index.php');
                    exit;
                }
            } else {
                return '<h3>Login Failed: Missing fields.</h3>';
            }
        }

        return false;
    }
}