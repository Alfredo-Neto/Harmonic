<?php

namespace app\core;

class Router {
    protected array $routes = [];
    public $request;
    
    function __construct($request) {
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve(){
        $uri = $this->request->getPath();
        $method = $this->request->getMethod();
        if(!$this->routes[$method] || !$this->routes[$method][$uri]){
            return 'Not Found';
        }
        $callback = $this->routes[$method][$uri];
        return call_user_func($callback);
    }
}