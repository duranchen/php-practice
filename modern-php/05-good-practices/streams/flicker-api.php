<?php
/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 8/28/16
 * Time: 10:53 AM
 */
$json = file_get_contents('http://api.flickr.com/services/feeds/photos_public.gne?format=json');

echo $json;