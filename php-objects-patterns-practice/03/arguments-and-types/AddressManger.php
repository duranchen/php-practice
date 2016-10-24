<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/15/16
 * Time: 8:56 PM
 */
class AddressManger
{

    private $addresses = ["209.131.36.159", "74.125.19.106"];


    /**
     * Outputs the list of addresses.
     * If $resolve is true then each address will be resolved.
     * @param $resolve boolean
     */
    public function outputAddresses($resolve)
    {
        if(is_bool($resolve) === false ){

            throw \Exception('outputAddresses() requires a Boolean arguments');
        }

        if ($resolve === true) {
            foreach ($this->addresses as $address) {
                print $address;
                print " (".gethostbyaddr($address).")";
                print PHP_EOL;
            }
        }


    }

}