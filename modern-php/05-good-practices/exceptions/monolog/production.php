<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 5:10 PM
 */

require "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SwiftMailerHandler;

$log = new Logger('my-app-name');
$log->pushHandler(new StreamHandler('logs/your.log'.Logger::WARNING));

// Add SwiftMailer handler for critical errrors

$transport = \Swift_SmtpTransport::newInstance('smtp.example.com',587)
    ->setUsername('Username')
    ->setPassword('Password');

$mailer = \Swift_Mailer::newInstance($transport);
$message = \Swift_Message::newInstance()
    ->setSubject('Webiste error!')
    ->setFrom(array('daemon@example.com'=>'John Doe'))
    ->setTo(array('admin@example.com'));


$log->pushHandler(new SwiftMailerHandler($mailer,$message,Logger::CRITICAL));

// Use logger
$log->critical('The server is on fire!');