<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:53 PM
 */

$output = '<p><script>alert("NSA backdoor installed");</script>';

echo htmlentities($output,ENT_QUOTES,'UTF-8');