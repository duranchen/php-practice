<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/26/16
 * Time: 10:12 PM
 */
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=books;port=3306;chartset=utf8', 'USERNAME', 'PASSWORD');

} catch (PDOException $e) {
    echo "Database connection failed";
}