<?php
/**
* Kendall Holm
* Created on 4/10/2015 at 7:50 AM
* @email kendalldarkmere@gmail.com
*/

/**
 * Will check for a get or post with a defined parameter and return it if exists
 * @param string $parameter The key of the post or get variable that you wish to retrieve
 * @return mixed Value of the post or get variable. Returns false if there is nothing to return
 */
function param($parameter)
{
    if ($_POST[$parameter]) {
        return $_POST[$parameter];
    } elseif ($_GET[$parameter]) {
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