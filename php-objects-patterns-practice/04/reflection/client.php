<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/23/16
 * Time: 11:17 PM
 */

require_once 'Module.php';
require_once 'FtpModule.php';
require_once 'Person.php';
require_once 'PersonModule.php';
require_once 'ModuleRunner.php';

$mr = new ModuleRunner();
$mr->init();

$modules = $mr->getModules();

foreach ($modules as $module) {
    $module->execute();
}
