<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/19/16
 * Time: 10:20 PM
 */
/**
 * @param $name
 * @return Closure
 */
function enclosePerson ($name) {
    return function ($doCommand) use ($name) {
        return sprintf('%s,%s',$name,$doCommand);
    };
}

$clay = enclosePerson('Clay');

echo $clay('get me sweet tea!');