<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/20/16
 * Time: 4:48 PM
 */
require_once('vendor/autoload.php');

$response = new \Symfony\Component\HttpFoundation\Response('Oops',400);
$response->send();