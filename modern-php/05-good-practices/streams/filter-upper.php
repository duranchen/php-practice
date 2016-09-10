<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 11:32 AM
 */

$handle = fopen('data.txt','rb');

stream_filter_append($handle,'string.toupper');

while(feof($handle)!==true) {
    echo fgets($handle);
}

fclose($handle);