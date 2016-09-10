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
}

$sql = 'SELECT id FROM users WHERE email = :email';

$email = filter_input(INPUT_GET, 'email');

$statement = $pdo->prepare($sql);

$statement->bindValue(':email', $email);