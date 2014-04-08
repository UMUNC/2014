<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xianwang
 * Date: 3/17/14
 * Time: 10:24 AM
 * To change this template use File | Settings | File Templates.
 */

# code for validating input

# strings - returns 1 if $var is made up of "words" or spaces
function validate_string($var, $min = 0) {
    if (preg_match('/^[A-Za-z0-9_,# \'\.]*$/', $var) && strlen($var) >= $min) {
        return 1;
    }
    return (0);
}

# strings plus hyphen - returns 1 if $var is made up of "words" or spaces or hyphens
function validate_string_hyphen($var, $min = 0) {
    if (preg_match('/^[-A-Za-z0-9_,# \'\.]*$/', $var) && strlen($var) >= $min) {
        return 1;
    }

    return (0);
}

# strings containing nothing but Chinese characters
function validate_chn_string($var, $min = 0) {
    if (preg_match("/^\p{Han}+$/u", $var) && strlen($var) >= $min) {
        return 1;
    }
    return (0);
}

# min and max are the min and max number of digits
function validate_num($var, $min = 0, $max = -1, $special = "") {
    $l = strlen($var);
    if (preg_match('/^[0-9]*$/', $var) && (($max == -1 && $l >= $min) || ($max != -1 && $l >= $min && $l <= $max))) {
        if ($special == "month") {
            if ($var <= 12) {
                return (1);
            } else {
                return(0);
            }
        } else {
            return 1;
        }
    }
    return (0);
}

# validate email address
function validate_email($var) {
    $regexp = "/^[a-zA-z0-9_.]+@[a-zA-Z0-9_]+\.[a-zA-Z0-9_]+/";
    if (preg_match($regexp, $var)) {
        return (1);
    }
    return (0);

}

?>
