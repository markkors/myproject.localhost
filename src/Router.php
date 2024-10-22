<?php

namespace Markk\MyprojectLocalhost;

class Router
{
    // create a router
    public $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    // add a route
    public function add($route, $controller)
    {
        $this->routes[$route] = $controller;
    }

    // match a route
    public function match($route)
    {
        if (array_key_exists($route, $this->routes)) {
            return $this->routes[$route];
        } else {
            return "404";
        }
    }

}