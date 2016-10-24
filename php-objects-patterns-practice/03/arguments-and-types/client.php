<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/15/16
 * Time: 9:10 PM
 */

require "AddressManger.php";

$settings = simplexml_load_file("settings.xml");


$manager = new AddressManger();

$manager->outputAddresses((string)$settings->resolvedomains);