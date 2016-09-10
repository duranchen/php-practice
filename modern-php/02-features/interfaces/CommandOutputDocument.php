<?php

/**
 * Created by PhpStorm.
 * User: modernphp
 * Date: 8/17/16
 * Time: 3:09 PM
 */
namespace modernphp\chapter2;

class CommandOutputDocument implements Documentable
{
    protected $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function getId()
    {
        return $this->command;
    }

    public function getContent()
    {
        return shell_exec($this->command);
    }


}