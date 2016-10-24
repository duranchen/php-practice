<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/16/16
 * Time: 9:49 PM
 */
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct($title,$firstName,$mainName,$price)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;

    }

    public function getProducer() {
        return "{$this->producerFirstName}".
        " {$this->producerMainName}";
    }

}