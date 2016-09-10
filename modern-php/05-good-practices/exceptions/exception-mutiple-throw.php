<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 3:48 PM
 */
try {
    throw new Exception('Not a PDO exception!');
    $pdo = new PDO('mysql:host=wrong_host;dbname=wrong_dbname', 'USERNAME', 'PASSWORD');
} catch (PDOException $e) {
    echo 'Caught PDO Exception';
} catch (Exception $e) {
    echo 'Caught Generic Exception';
} finally {
    echo 'Always do this!';
}