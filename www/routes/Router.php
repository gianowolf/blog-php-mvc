<?php

class Router 
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $req_type)
    {
        if (array_key_exists($uri, $this->routes[$req_type]))
        {
            return $this->routes[$req_type][$uri];
        }
        else 
        {
            return 'app/views/statics/404.php';
        }
    }

}