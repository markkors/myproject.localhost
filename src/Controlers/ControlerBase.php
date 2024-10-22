<?php

namespace Markk\MyprojectLocalhost\Controlers;

class ControlerBase
{
    public function __construct()
    {

    }

    public function render($view)
    {
        include "Views/".$view.".php";
    }
}