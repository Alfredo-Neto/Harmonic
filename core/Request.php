<?php

namespace app\core;

class Request {
 
    public function getPath(){
       $uri = $_SERVER['REQUEST_URI'];
       return $uri = explode('?', $uri)[0] ?? '/';
    }

    public function getMethod(){
        $method = strtolower($_SERVER['REQUEST_METHOD']) ?? 'get';
        return $method;
    }
}