<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/15/16
 * Time: 11:22 PM
 */
require  "../classes-and-objects/ShopProduct.php";
class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = "{$shopProduct->title}: ".
            $shopProduct->getProducer().
            " ({$shopProduct->price})\n";

        print $str;
    }

}

$product1 = new ShopProduct("My Antonia","Willa","Cather",5.99);

$writer = new ShopProductWriter();

$writer->write($product1);
