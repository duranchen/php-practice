<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 4:44 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 'OFF');

set_error_handler(
    function ($errno, $errstr, $errfile, $errline) {
        if (!(error_reporting() & $errno)) {
            //Error is not specified in the error_reporting settings, so we ignore it.
            return;
        }

        throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
    }
);

echo 'test';


trigger_error('This becomes an exception!');


restore_error_handler();