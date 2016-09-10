<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 10:58 AM
 */

$handle = fopen('/etc/hosts','rb');
while (feof($handle) !== true ) {
    echo fgets($handle),'<br >';
}

fclose($handle);