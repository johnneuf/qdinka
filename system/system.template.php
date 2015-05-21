<?php
/**
 * Settings for the server will go here
* Kendall Holm
* Created on 4/10/2015 at 7:12 AM
* @email kendalldarkmere@gmail.com
*/

define('SYSTEM_SETTING_MAINTENANCE', false);
define('SERVER_IN_USE', 'http://192.168.1.18');

//Login Constants Users
define('DB_USER_USER', 'usr_secure');
define('DB_USER_PASSWORD', 'usr_secure');
define('DB_USER_DNS', 'mysql:host=localhost;dbname=qdinka_secure;charset=utf8');

//Login Constants Main
define('DB_MAIN_DNS', 'mysql:host=localhost;dbname=qdinka3;charset=utf8');
define('DB_MAIN_USER', 'root');
define('DB_MAIN_PASSWORD', 'root');

//Google Captcha
define('CAPTCHA_ENABLED', false);
define('CAPTCHA_SITE_KEY', '6LcysAYTAAAAAL-OxP4o88-vAzvX-ltJVOZKnl36');
define('CAPTCHA_SECRET_KEY', '6LcysAYTAAAAAFxhC18Lk_l7BnVmD9pZQqmLPQOk');