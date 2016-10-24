<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/15/16
 * Time: 11:22 PM
 */

abstract class ShopProductWriter
{
    protected $products = array();

    public function addProduct(ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

}


