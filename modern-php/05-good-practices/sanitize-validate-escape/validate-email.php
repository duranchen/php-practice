<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:48 PM
 */

$input = 'john@@example.com';

$isEmail = filter_var($input,FILTER_VALIDATE_EMAIL);

if($isEmail !== false) {
    echo "Success";
} else {
    echo "Fail";
}