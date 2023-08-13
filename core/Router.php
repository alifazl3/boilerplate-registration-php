<?php

class Router {
    private $routes = [];

    public function home($path, $callback) {

        $this->routes[$path] = $callback;
    }

    public function register($path, $callback) {

        $this->routes[$path] = $callback;
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            call_user_func($this->routes[$url]);
        } else {
            echo "404 - Page not found.";
        }
    }
}
