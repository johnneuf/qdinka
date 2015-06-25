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
        $this->add_js('https://www.google.com/recaptcha/api.js');
    }

    protected function body()
    {
        $message = $this->post();

        if (param('page') == 'register') {
            ?>
            <div class="main-wrapper">
                <div class="register-wrapper">
                    <h1>Request Registration</h1>
                    To register we require you to make a request. If you are approved you will get an email with a
                    temporary password to login with to customize your account farther.
                    <div class="register-content-wrapper">
                        <form action="" method="post">
                            <label for="txtName">Enter in an user name:</label>
                            <br />
                            <input type="text" name="txtName" id="txtName" />
                            <br />
                            <label for="txtCompany">Company:</label>
                            <br />
                            <input type="text" name="txtCompany" id="txtCompany" />
                            <br />
                            <label for="txtEmail">Email:</label>
                            <br />
                            <input type="email" name="txtEmail" id="txtEmail" />
                            <br />
                            <label for="txtRetypeEmail">Retype your email:</label>
                            <br />
                            <input type="email" name="txtRetypeEmail" id="txtRetypeEmail" />
                            <br />
                            <?php
                            if (CAPTCHA_ENABLED) {
                                echo '<div class="g-recaptcha" data-sitekey="' . CAPTCHA_SITE_KEY . '"></div>';
                            }
                            ?>
                            <input type="submit" name="btnSubmit" />
                        </form>
                    </div>
                </div>
            </div>
        <?php
        } else {
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
                                <input type="submit" name="btnLogin" value="Login" />
                                <input type="submit" name="btnRegister" value="Register" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
    }

    protected function side_menu()
    {
        $menu = new MainMenu();
        echo $menu;
    }

    private function post()
    {
        //Check to see what button was pressed
        if (param('btnLogin')) {

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
        } elseif (param('btnRegister')) {
            header('Location: /pages/users/login.php?page=register');
        }

        return false;
    }
}