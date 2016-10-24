<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/18/16
 * Time: 4:48 PM
 */
require_once "ShopProduct.php";
require_once "BookProduct.php";
require_once "Cdproduct.php";
$dns = "sqlite://Users/duranchen/Sites/php-practice/php-objects-patterns-practice/04/static-methods-and-properties/products";

$pdo = new PDO($dns,null,null);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$obj = ShopProduct::getInstance(1,$pdo);

var_dump($obj);