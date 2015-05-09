<?php
/**
* Kendall Holm
* Created on 5/6/2015 at 7:23 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\pages;


use includes\menus\MainMenu;
use includes\template\TemplateBase;

class RegistrationPage extends TemplateBase {
    function __construct($noTemplate = false, $maintenance = false)
    {
        parent::__construct('Registration', $noTemplate, $maintenance);

        $this->add_css('/stylesheets/loginout.css');
        $this->add_js('https://www.google.com/recaptcha/api.js');
    }

    protected function body()
    {
        ?>
        <div class="registration-wrapper">
            <div class="registration-bubble">
                <h2>Registration</h2>
                <div class="registration-content">
                    <form action="" method="post">
                        <label for="txtName">Name:</label><br />
                        <input type="text" name="txtName" value="" id="txtName" /><br />
                        <label for="txtEmail">Email:</label><br />
                        <input type="email" name="txtEmail" id="txtEmail" /><br />
                        <label for="txtCompanyName">Company Name:</label><br />
                        <input type="text" name="txtCompanyName" id="txtCompanyName" /><br />
                        <label for="txtComments">Comments:</label><br />
                        <textarea name="txtComments" id="txtComments"></textarea><br/>
                        <div class="g-recaptcha" data-sitekey="6Lf5cQYTAAAAADy-Ms-tgD3Es_ipDhn2mptlUet0"></div>
                        <input type="submit" name="btnRegister" value="Register">
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
}