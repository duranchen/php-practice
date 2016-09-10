<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 11:02 AM
 */

$handle = fopen('file:///etc/hosts','rb');
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);