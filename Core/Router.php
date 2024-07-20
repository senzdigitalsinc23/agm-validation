<?php

namespace Core;

use Core\Middleware\Middleware;

class Router {

    protected $routes = [];
  
    protected function add($uri, $controller, $method) {
        $this->routes[] = [
            'uri'   =>  $uri,
            'controller'    => $controller,
            'method'    =>  $method,
            'middleware'    => null
        ];

        return $this;
    }
    public function get($uri, $controller) {
        
       return $this->add($uri, $controller, Request::GET_REQUEST);
        //ddreturn($this->routes);
    }

    public function post($uri, $controller) {
       return $this->add($uri, $controller, Request::POST_REQUEST);
        
    }

    public function delete($uri, $controller) {
       return $this->add($uri, $controller, Request::DELETE_REQUEST);
    }

    public function patch($uri, $controller) {
       return $this->add($uri, $controller, Request::PATCH_REQUEST);
    }

    public function put($uri, $controller) {
       return $this->add($uri, $controller, Request::PUT_REQUEST);
    }

    public function only($key) {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method) {
        //dd($this->routes);
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
              
                Middleware::resolve($route['middleware']);

                return require_once base_path("Http/controllers/{$route['controller']}");
            }
        }

        abort(Response::NOT_FOUND);
    }

}







