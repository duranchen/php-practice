<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/24/16
 * Time: 9:30 PM
 */

$sql = sprintf('UPDATE users SET password = "%s" WHERE id = "%s"',$_POST['password'],$_GET['id']);