<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/27/16
 * Time: 11:06 PM
 */
require 'settings.php';

try {
    $pdo = new PDO(
        sprintf(
            'mysql:host=%s;dbname=%s;port=%s;charset=%s',
            $settings['host'],
            $settings['name'],
            $settings['port'],
            $settings['charset']
        ), $settings['username'], $settings['password']
    );
} catch (PDOException $e) {
    echo "Database connection failed";
    exit;
}

// Statements

$stmtSubtract = $pdo->prepare('UPDATE accounts SET amount = amount - :amount WHERE name = :name');

$stmtAdd = $pdo->prepare('UPDATE accounts SET amount = amount + :amount WHERE name = :name');


// Withdraw funds from account 1
$fromAccount = 'Checking';
$withdrawal = 50;
$stmtSubtract->bindParam(':name',$fromAccount);
$stmtSubtract->bindParam(':amount',$withdrawal,PDO::PARAM_INT);
$stmtSubtract->execute();

// Deposit funds into account 2
$toAccount = 'Saving';
$deposit = 50;

$stmtAdd->bindParam(':name',$toAccount);
$stmtAdd->bindParam(':amount',$deposit,PDO::PARAM_INT);
$stmtAdd->execute();