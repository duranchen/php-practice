<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/16/16
 * Time: 10:13 PM
 */

class ShopProduct
{
    private $id;
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

    public function setId($id)
    {
        $this->id = $id;
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

    static public function getInstance($id, PDO $pdo)
    {
        $stmt = $pdo->prepare("select * from products where id=:id");
        $stmt->bindParam(':id',$id);
        $result = $stmt->execute();
        $row = $stmt->fetch();

        if(empty($row)===true) {
            return null;
        }

        if($row['type'] === 'book') {

            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['numpages']
            );

        } else if($row['type'] === 'cd') {
            $product = new Cdproduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['playlength']
            );
        } else {
            $product = new ShopProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price']
            );
        }

        $product->setId($row['id']);
        $product->setDiscount($row['discount']);

        return $product;
    }

}