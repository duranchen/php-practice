<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 8:53 PM
 */
trait PriceUtilities
{
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100)*$price);
    }
}

class ShopProduct {
    use PriceUtilities;
}

abstract UtilityService extends Service {
    use PriceUtilities;
}