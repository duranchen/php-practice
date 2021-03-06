<?php

/**
 * User: Duran CHEN
 * Email: duran.chen@gmail.com
 * Date: 10/12/16
 * Time: 10:46 PM
 */
require 'ShopProductWriter.php';
class XmlProductWriter extends ShopProductWriter
{
    public function write()
    {
        $writer = new XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0','UTF-8');
        $writer->startElement("products");
        foreach ($this->products as $shopProduct) {
            $writer->startElement("product");
            $writer->writeAttribute("title",$shopProduct->getTitle());
            $writer->startElement("summary");
            $writer->text($shopProduct->getSummaryLine());
            $writer->endElement();
            $writer->endElement();
        }
        $writer->endElement();
        $writer->endDocument();

        print $writer->flush();
    }

}

