<?php

/**
 * Created by PhpStorm.
 * User: modernphp
 * Date: 8/17/16
 * Time: 12:05 AM
 */


use modernphp\chapter2\DocumentStore;
use modernphp\chapter2\HtmlDocument;
use modernphp\chapter2\StreamDocument;
use modernphp\chapter2\CommandOutputDocument;

require_once('vendor/autoload.php');

$documentStore = new DocumentStore();

// Add HTML document
$htmlDoc = new HtmlDocument('http://php.net');
$documentStore->addDocument($htmlDoc);

// Add stream document
$streamDoc = new StreamDocument(fopen('stream.txt','rb'));
$documentStore->addDocument($streamDoc);

// Add terminal command document
$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());

