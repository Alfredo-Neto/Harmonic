<?php

namespace app\core;

class Application {
    public $router;
    public $request;
    
    function __construct() {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(){
        echo $this->router->resolve();
    }
}