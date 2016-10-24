<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 8:42 PM
 */
class ShopProduct
{
    private $taxrate = 17;
    function calculateTax($price){
        return (($this->taxrate/100)*$price);
    }

}

$p = new ShopProduct();

print $p->calculateTax(100);