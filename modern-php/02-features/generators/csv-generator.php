<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/18/16
 * Time: 10:38 PM
 */
/**
 * @param $file
 * @return Generator
 * @throws Exception
 */

function getRows($file) {
    $handle = fopen($file,'rb');

    if($handle === false ) {
        throw new Exception();
    }

    while (feof($handle) === false) {
        yield fgetcsv($handle);
    }

    fclose($handle);
}

foreach(getRows('data.csv') as $row ) {
    print_r($row);
}