<?php

/**
 * Created by PhpStorm.
 * User: duranchen
 * Date: 8/17/16
 * Time: 5:30 PM
 */
trait Geocodable
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var \Geocoder\Geocoder
     */
    protected $geocoder;

    /**
     * @var \Geocoder\Model\Address
     */
    protected $geocodeAddress;

    public function setGeocoder(\Geocoder\Geocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function geocodeAddress()
    {
        $this->geocodeAddress = $this->geocoder->geocode($this->address)->first();
    }

    public function getLongitude()
    {
        if (isset($this->geocodeAddress) === false) {
            $this->geocodeAddress();
        }

        return $this->geocodeAddress->getLongitude();
    }

    public function getLatitude()
    {
        if (isset($this->geocodeAddress) === false) {
            $this->geocodeAddress();
        }

        return $this->geocodeAddress->getLatitude();
    }

    public function getAddress()
    {

        if (isset($this->geocodeAddress) === false) {
            $this->geocodeAddress();
        }

        return $this->geocodeAddress->getLocality().','.$this->geocodeAddress->getCountry();
    }

}