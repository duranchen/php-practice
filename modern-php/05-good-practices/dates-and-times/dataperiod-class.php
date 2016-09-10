<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/26/16
 * Time: 12:15 AM
 */

$dateStart = new DateTime('now', new DateTimeZone('Asia/Shanghai'));

$dateInterval = new DateInterval('P2W');

$datePeriod = new DatePeriod($dateStart, $dateInterval, 3);

foreach ($datePeriod as $nextDatetime) {
    echo $nextDatetime->format('Y-m-d H:i:s').PHP_EOL;
}