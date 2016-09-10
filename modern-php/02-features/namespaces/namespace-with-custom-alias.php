<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/20/16
 * Time: 8:18 PM
 */

require_once('vendor/autoload.php');
use Symfony\Component\HttpFoundation\Response as Res;

$response = new Res('Oops',400);
$response->send();