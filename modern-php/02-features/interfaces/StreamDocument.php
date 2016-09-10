<?php

/**
 * Created by PhpStorm.
 * User: modernphp
 * Date: 8/17/16
 * Time: 2:57 PM
 */
namespace modernphp\chapter2;

class StreamDocument implements Documentable
{
    protected $resource;
    protected $buffer;

    public function __construct($resource, $buffer = 4096)
    {
        $this->resource = $resource;
        $this->buffer = $buffer;
    }

    public function getId()
    {
        return 'resource-'.(int)$this->resource;
    }

    public function getContent()
    {
        $streamContent = '';
        rewind($this->resource);
        while (feof($this->resource)=== false) {
            $streamContent .= fread($this->resource,$this->buffer);
        }

        return $streamContent;
    }

}