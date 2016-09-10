<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/18/16
 * Time: 10:21 PM
 */
function makeRange($length) {
    $dataSet = [];

    for ($i = 0; $i < $length; $i++) {
        $dataSet[] = $i;
    }

    return $dataSet;
}

$customRange = makeRange(1000000);

foreach ($customRange as $i) {
    echo $i, PHP_EOL;
}