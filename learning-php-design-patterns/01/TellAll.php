<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 9/12/16
 * Time: 10:03 PM
 */
class TellAll
{
    protected $userAgent;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];

        echo $this->userAgent;

    }
}

$tellAll = new TellAll();