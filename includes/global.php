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
    return (isset($_REQUEST[$parameter])) ? $_REQUEST[$parameter] : false;
}

/**
 * Retrieves the session variable
 * @param string $parameter The parameter to look for
 * @return bool|mixed False if nothing was found else it will return anything it finds
 */
function session_param($parameter)
{
    return (isset($_SESSION[$parameter])) ? $_SESSION[$parameter] : false;
}

/**
 * Will save information to the session. If it is an object it will auto serialize it
 * @param string $parameter The parameter that you want to save to
 * @param mixed $variable The variable that you want to save
 */
function session_save($parameter, $variable)
{
    //If the variable is an object you have to serialize it in order to save it.
    $_SESSION[$parameter] = (is_object($variable)) ? serialize($variable) : $variable;
}

/**
 * Same as session_param but this one will unserialize the object that is stored
 * @param string $parameter The parameter you want to look for
 * @return bool|mixed False if nothing is found else the object you are looking for
 */
function session_object($parameter)
{
    return (session_param($parameter)) ? unserialize(session_param($parameter)) : false;
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
 * @param string $response This is the response from $_POST['g-recaptcha-response']
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

/**
 * Retrieves the IP from which the user is connecting from
 * @return string The users IP that they are connecting from
 */
function get_user_ip()
{
    return $_SERVER['REMOTE_ADDR'];
}