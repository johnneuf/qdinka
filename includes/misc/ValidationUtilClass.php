<?php
/**
* Kendall Holm
* Created on 6/18/2015 at 10:37 AM
* @email kendalldarkmere@gmail.com
*/


namespace includes\misc;


class ValidationUtil {

    /**
     * Validates a textbox on a form
     * @param string $validateField The field you want to test
     * @param int $maxLength The max length the field can be
     * @param int $minLength The min length the field can be
     * @return bool Returns false if the field doesn't validate
     */
    public static function text($validateField, $maxLength, $minLength)
    {
        //Check to make there is something there and that it follows the rules
        if ($validateField == '' || strlen($validateField) > $maxLength || strlen($validateField) < $minLength) {
            return false;
        }

        return true;
    }

    /**
     * Validates an email
     * @param $validateField
     * @return bool
     */
    public static function email($validateField)
    {
        if (substr(strstr($validateField, '@'), 1) || strstr($validateField, '@', true) || substr(strstr($validateField, '.'), 1)) {
            return true;
        }

        return false;
    }
}