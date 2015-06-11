<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 7:50 AM
* @email kendalldarkmere@gmail.com
*/

define('SERVER_IP', $_SERVER['REMOTE_ADDR']); //Servers IP address

/**
 * Will check for a get or post with a defined parameter and return it if exists
 * @param string $parameter The key of the post or get variable that you wish to retrieve
 * @return mixed Value of the post or get variable. Returns false if there is nothing to return
 */
function param($parameter)
{
    if (isset($_POST[$parameter])) {
        return $_POST[$parameter];
    } elseif (isset($_GET[$parameter])) {
        return $_GET[$parameter];
    }

    return false;
}

/**
 * Creates a url that is safe for the server and client
 * @param string $dir The dir and file name you wish to use
 * @return string Safe url
 */
function url($dir)
{
    return SERVER_IN_USE . $dir;
}

/**
 * Shows errors on the page
 */
function debug_errors()
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

/**
 * Verifies the response $_POST['g-recaptcha-response'] from google
 * @param string $response This is the responce from $_POST['g-recaptcha-response']
 * @return bool returns true if the person checks out to not be a robot
 */
function verify_captcha($response)
{
    //Init
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_SECRET_KEY . '&responce=' . $response . '&remoteip=' . SERVER_IP;

    //Get the response from Google
    $data = json_decode(file_get_contents($url));

    return (isset($data->sucess) && $data->sucess == true);
}