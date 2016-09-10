<?php

/**
 * Created by PhpStorm.
 * User: modernphp
 * Date: 8/17/16
 * Time: 12:08 AM
 */
namespace modernphp\chapter2;

class HtmlDocument implements Documentable
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getId()
    {
        return $this->url;
    }

    public function getContent()
    {
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL,$this->url);

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,3);

        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

        curl_setopt($ch,CURLOPT_MAXREDIRS,3);

        $html = curl_exec($ch);

        curl_close($ch);

        return $html;
    }

}