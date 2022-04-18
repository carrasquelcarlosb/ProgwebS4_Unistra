<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "app/config/config.php";
class Router
{
    public $url;
    public $routes = [];
    public function constructor($url)
    {
        $this->url = trim($url, '/');
    }

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function run()
    {
        foreach($this->routes $_SERVER['REQUEST_METHOD'] as $route)
        {
            if ($route->matches($this->url))
            {
                $router->execute();
            }
            return header('HTTP/1.0 404 Not found');
        }
    }
    public function show()
    {
        echo $this->url;
    }



}