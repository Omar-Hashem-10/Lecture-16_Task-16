<?php

class Router {
    private $routes = [];

    public function addRoute($method, $path, $callback) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'callback' => $callback
        ];
    }

    public function handleRequest($requestMethod, $requestPath) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestPath) {
                return call_user_func($route['callback']);
            }
        }
        return $this->notFound();
    }

    private function notFound() {
        http_response_code(404);
        return "404 Not Found";
    }
}
?>
