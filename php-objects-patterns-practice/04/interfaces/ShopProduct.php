<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 8:25 PM
 */
class ShopProduct implements Chargeable
{
    public function getPrice()
    {
        // TODO: Implement getPrice() method.
        return ($this->price - $this->discount);
    }

}