<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/2/16
 * Time: 10:50 PM
 */


function myAutoload($className){

    include_once $className.'.php';

}

spl_autoload_register('myAutoload');

$user = new User();

$user->setLanguage('fr');

$userLanguage = $user->getLanguage();

echo $userLanguage;

