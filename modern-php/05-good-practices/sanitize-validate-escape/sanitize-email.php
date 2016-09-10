<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:35 PM
 */

$string = 'johon@exaple.com';
$emailSafe = filter_var($string,FILTER_SANITIZE_EMAIL);

echo $emailSafe;