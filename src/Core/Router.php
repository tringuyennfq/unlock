<?php

namespace TriNguyen\Unlock\Core;

class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve()
    {
        echo "URI: ".$_SERVER['REQUEST_URI']."<br>";
        echo "Path: ".$this->request->getPath()."<br>";
        echo "Method: ".$this->request->getMethod()."<br>";
    }
}
