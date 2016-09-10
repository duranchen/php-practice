<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/25/16
 * Time: 11:58 PM
 */

$dateStart = new \DateTime();

$dateInterval = DateInterval::createFromDateString('-1 day');

$datePeriod = new \DatePeriod($dateStart,$dateInterval,3);

foreach($datePeriod as $date) {
    echo $date->format('Y-m-d H:i:s'),PHP_EOL;
}