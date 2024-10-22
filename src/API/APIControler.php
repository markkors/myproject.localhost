<?php

namespace Markk\MyprojectLocalhost\API;

class APIControler {

    public function __construct($request)
    {

    }

    public function render() {
        $persons = array(
            array('name' => 'John', 'age' => 25),
            array('name' => 'Jane', 'age' => 22),
            array('name' => 'Jim', 'age' => 30),
            array('name' => 'Jill', 'age' => 35),
            array('name' => 'Jack', 'age' => 40),
        );
        return json_encode($persons);


    }



}