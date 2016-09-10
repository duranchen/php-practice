<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/27/16
 * Time: 9:59 PM
 */

require 'settings.php';

try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $settings['host'],
            $settings['name'],
            $settings['port'],
            $settins['charset']
        ), $settings['username'], $settings['password']
    );
} catch (PDOException $e) {
    echo "Database connection failed";
    exit;
}

$sql = 'SELECT id FROM users WHERE id = :id';

$email = filter_input(INPUT_GET, 'id');

$statement = $pdo->prepare($sql);

$statement->bindValue(':id', $id,PDO::PARAM_INT);