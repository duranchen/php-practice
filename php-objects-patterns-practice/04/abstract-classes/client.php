<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/18/16
 * Time: 4:48 PM
 */
require_once "../static-methods-and-properties/ShopProduct.php";
require_once "../static-methods-and-properties/BookProduct.php";
require_once "../static-methods-and-properties/Cdproduct.php";
require_once "XmlProductWriter.php";
require_once "TextProductWriter.php";
$dns = "sqlite://Users/duranchen/Sites/php-practice/php-objects-patterns-practice/04/static-methods-and-properties/products";

$pdo = new PDO($dns,null,null);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$product1 = ShopProduct::getInstance(1,$pdo);
$product2 = ShopProduct::getInstance(2,$pdo);


$xmlWriter = new XmlProductWriter();

$xmlWriter->addProduct($product1);
$xmlWriter->addProduct($product2);
$xmlWriter->write();

$textWriter = new TextProductWriter();

$textWriter->addProduct($product1);
$textWriter->addProduct($product2);


$textWriter->write();