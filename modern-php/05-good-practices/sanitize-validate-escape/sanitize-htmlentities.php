<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:20 PM
 */

$input = '<p><script>alert("You won the Nigerian lottery!");</script></p>';

echo htmlentities($input,ENT_QUOTES,'UTF-8');