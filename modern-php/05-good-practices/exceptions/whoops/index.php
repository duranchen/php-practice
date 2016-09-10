<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 5:05 PM
 */

require 'vendor/autoload.php';

// Set up Whoops error and exception handlers

$whoops = new \Whoops\Run;

$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();


throw new Exception('Oh No');