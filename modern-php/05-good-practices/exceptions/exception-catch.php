<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 3:45 PM
 */

try {
    $pdo = new PDO('mysql:host=wrong_host;dbname=wrong_dbname','Username','Password');
} catch (PDOException $e) {
    $code = $e->getCode();
    $message = $e->getMessage();

    echo 'Something went wrong, please check back soon!';
}