<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/19/16
 * Time: 10:10 PM
 */

$closure = function ($name) {
    return sprintf('Hello %s',$name);
};

echo $closure('Duran');