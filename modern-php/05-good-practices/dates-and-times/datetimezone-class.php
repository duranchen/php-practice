<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/26/16
 * Time: 12:06 AM
 */

$timezone = new DateTimeZone('UTC');

$datetime = new DateTime('now',$timezone);

echo $datetime->format('Y-m-d H:i:s');

$datetime->setTimezone(new DateTimeZone('Asia/Hong_Kong'));

echo $datetime->format('Y-m-d H:i:s');