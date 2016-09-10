<?php

/**
 * Created by PhpStorm.
 * User: modernphp
 * Date: 8/17/16
 * Time: 12:05 AM
 */
namespace modernphp\chapter2;

class DocumentStore
{
    protected $data =[];

    public function addDocument(Documentable $document)
    {
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }

    public function getDocuments()
    {
        return $this->data;
    }

}



