<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/21/16
 * Time: 3:08 PM
 */

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('myApp');
$log->pushHandler(new StreamHandler('logs/development.log'),logger::DEBUG);
$log->pushHandler(new StreamHandler('logs/production.log'),logger::WARNING);


$log->debug('This is a debug message');
$log->warning('This is a warning message');

