<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 4:03 PM
 */

set_exception_handler(function (\Exception $e) {
    // Handle and log exception
    echo "Handle Exception:".$e->getMessage();
});

throw new Exception("Something went wrong!");

restore_error_handler();