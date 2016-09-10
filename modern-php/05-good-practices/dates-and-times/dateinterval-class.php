<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/25/16
 * Time: 11:52 PM
 */

$datetime = new DateTime('2014-01-01 14:00:00');

$interval = new DateInterval('P3W');

$datetime->add($interval);

echo $datetime->format('Y-m-d H:i:s');