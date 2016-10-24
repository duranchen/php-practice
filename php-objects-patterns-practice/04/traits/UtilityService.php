<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 8:46 PM
 */
include 'Service.php';
class UtilityService extends Service
{
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100)*$price);
    }

}

$u = new UtilityService();

print $u->calculateTax(100);