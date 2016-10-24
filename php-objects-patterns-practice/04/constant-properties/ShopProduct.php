<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/16/16
 * Time: 10:13 PM
 */
class ShopProduct
{
    const AVAILABLE = 0;
    const OUT_OF_STOCK = 1;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * @return mixed
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return ($this->price - $this->discount);
    }


    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getProducer()
    {
        return "{$this->producerFirstName}"." {$this->producerMainName}";

    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )";

        return $base;
    }

}