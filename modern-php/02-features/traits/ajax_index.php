<?php
/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/17/16
 * Time: 8:34 PM
 */
require_once('vendor/autoload.php');

$address = $_POST['address'];

if (isset($address) === true) {

    $geocoderAdapter = new \Ivory\HttpAdapter\CurlHttpAdapter();
    $geocoderProvider = new \Geocoder\Provider\GoogleMaps($geocoderAdapter);

    $geocoder = new \Geocoder\ProviderAggregator();

    $geocoder->registerProvider($geocoderProvider);

    $store = new RetailStore();

    $store->setAddress($address);

    $store->setGeocoder($geocoder);

    $latitude = $store->getLatitude();
    $longitude = $store->getLongitude();
    $address = $store->getAddress();

    echo $latitude, ',', $longitude,','.$address;


}


