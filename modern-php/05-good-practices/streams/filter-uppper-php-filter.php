<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 11:49 AM
 */
$handle = fopen('php://filter/read=string.toupper/resource=data.txt','rb');

while(feof($handle) !== true) {
    echo fgets($handle);
}