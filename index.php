<?php

require 'vendor/autoload.php';

use Markk\MyprojectLocalhost\User;
use Markk\MyprojectLocalhost\Router;
use Markk\MyprojectLocalhost\Controlers\HomeControler;
use Markk\MyprojectLocalhost\Controlers\AboutControler;
use Markk\MyprojectLocalhost\Controlers\ContactControler;
use Markk\MyprojectLocalhost\API\APIControler;

$router = new Router();
$router->add("/","home");
$router->add("/about","about");
$router->add("/contact","contact");
$router->add("/getuser","getuser");

$uri = $_SERVER['REQUEST_URI'];
$controller = $router->match($uri);

switch($controller) {
    case "home":
        $ctrl = new HomeControler();
        $ctrl->render("Home");
        break;
    case "about":
        $ctrl = new AboutControler();
        $ctrl->render("About");
        break;
    case "contact":
        $ctrl = new ContactControler();
        $ctrl->render("Contact");
        break;
    case "getuser":
        $ctrl = new APIControler("getuser");
        echo $ctrl->render();
        break;

    default:
        echo "404";
        break;
}
