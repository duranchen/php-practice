<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:38 PM
 */

$string = "\nIñtërnâtiônàlizætiøn\t";

$safeString = filter_var($string,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH);

echo $safeString;