<?php

namespace Markk\MyprojectLocalhost;

class User
{

    // members
    public $firstname;
    public $lastname;
    public $assets = [];

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;

    }


    public function addAsset($asset)
    {
        array_push($this->assets, $asset);
    }

    public function getFullname()
    {
        return $this->firstname . " " . $this->lastname;
    }

}
