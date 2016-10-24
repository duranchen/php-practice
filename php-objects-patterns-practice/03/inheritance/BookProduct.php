<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/17/16
 * Time: 10:54 AM
 */
require "ShopProduct.php";

class BookProduct extends ShopProduct
{
    private $numPages = 0;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);

        $this->numPages = $numPages;
    }

    /**
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->numPages;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= " : page count - {$this->numPages}";
        return $base;
    }

}