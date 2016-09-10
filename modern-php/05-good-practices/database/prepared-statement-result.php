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
            $settings['charset']
        ), $settings['username'], $settings['password']
    );
} catch (PDOException $e) {
    echo "Database connection failed";
    exit;
}

$sql = 'SELECT id,email FROM users WHERE email = :email';

$email = filter_input(INPUT_GET, 'email');

$statement = $pdo->prepare($sql);

$statement->bindValue(':email', $email,PDO::PARAM_STR);

echo 'One result as a time as associative array', PHP_EOL;

$statement->execute();

while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $result['email'];
}

echo 'All results at once as associative array',PHP_EOL;

$statement->execute();

$allResults = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($allResults as $result){
    echo $result['email'],PHP_EOL;
}

echo 'Fetch one column, one row at a time as associative array',PHP_EOL;

$statement->execute();

while(($email = $statement->fetchColumn(1)) !== false) {
    echo $email,PHP_EOL;
}

echo 'One result as a time as object',PHP_EOL;

$statement->execute();

while(($result = $statement->fetchObject()) !== false) {
    echo $result->email,PHP_EOL;
}