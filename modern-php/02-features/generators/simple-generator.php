<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/18/16
 * Time: 10:10 PM
 */

function myGenerator () {
    yield 'value1';
    yield 'value2';
    yield 'value3';
}

foreach (myGenerator() as $yieldedValue ) {
    echo $yieldedValue,PHP_EOL;
}