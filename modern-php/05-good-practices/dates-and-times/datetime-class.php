<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/25/16
 * Time: 11:42 PM
 */

date_default_timezone_set('Asia/Shanghai');

$datetime1 = new DateTime();

$datetime2 = new DateTime('2016-08-25 3:40 PM');

$datetime3 = DateTime::createFromFormat('M j, Y H:i:s','Jan 2, 2016 10:00:00');
