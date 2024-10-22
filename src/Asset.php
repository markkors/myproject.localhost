<?php

namespace Markk\MyprojectLocalhost;

class Asset
{
    public $type;
    public $name;
    public $price;


    public function __construct($type,$name,$price)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
    }

}