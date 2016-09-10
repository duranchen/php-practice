<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/19/16
 * Time: 10:14 PM
 */

$numberPlusOne = array_map(
    function ($number) {
        return $number + 1;
    },
    [1, 2, 3]
);

print_r($numberPlusOne);