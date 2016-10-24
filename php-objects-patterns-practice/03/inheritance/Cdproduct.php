<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/17/16
 * Time: 10:33 AM
 */
require 'ShopProduct.php';

class Cdproduct extends ShopProduct
{
    private $playLength = 0;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);

        $this->playLength = $playLength;
    }

    /**
     * @return int
     */
    public function getPlayLength()
    {
        return $this->playLength;
    }

    /**
     * @param int $playLength
     */
    public function setPlayLength($playLength)
    {
        $this->playLength = $playLength;
    }


    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();

        $base .= ": play time - {$this->playLength}";

        return $base;
    }

}