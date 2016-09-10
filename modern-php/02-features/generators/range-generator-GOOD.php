<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/18/16
 * Time: 10:33 PM
 */

/**
 * @param $length
 * @return Generator
 */
function makeRange($length)
{
    for ($i = 0; $i < $length; $i++) {
        yield $i;
    }
}

foreach (makeRange(1000000) as $i) {
    echo $i, PHP_EOL;
}