<?php
namespace Illluminates\Router;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'PATCH' => [],
        'DELETE' => []
    ];

    public function add(string $method, string $route,$controller,$action, array $middlewares = [])
    {
        $this->routes[$method][$route] = compact('controller','action','middlewares');
    }
    public function routes()
    {
        return $this->routes;
    }
    // Make Dispatch
    public function dispatch($uri, $method)
    {
        // return $this->routes[$method][$uri];
        // echo ltrim($uri,'Learn%20MVC/public/ /public') .' =' .$method; From My PC
        $uri = str_replace($uri,'/public/','/');
        $data=$this->routes[$method][$uri];
       echo $data['action']();
        // var_dump($data);
    }
}