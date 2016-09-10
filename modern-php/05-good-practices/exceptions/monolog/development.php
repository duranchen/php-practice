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

$log = new Logger('my-app-name');
$log->pushHandler(new StreamHandler('logs/your.log'.Logger::WARNING));
