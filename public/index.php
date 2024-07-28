<?php

/**
 * Run Composer Autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';


use Illluminates\Router\Router;

$router = new Router();

$router->add('GET','/','',function(){
    echo 'Hello From MVC';
},[]);

$router->dispatch($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);
// echo "<pre>";
// var_dump($router->routes());

