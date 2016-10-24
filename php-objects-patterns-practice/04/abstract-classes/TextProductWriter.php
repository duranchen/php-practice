<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/12/16
 * Time: 11:38 PM
 */

require_once "ShopProductWriter.php";

class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "PRODUCTS:\n";
        foreach ($this->products as $shopProduct ){
            $str .= $shopProduct->getSummaryLine()."\n";
        }

        print $str;
    }

}