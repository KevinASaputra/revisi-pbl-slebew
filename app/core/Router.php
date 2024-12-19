<?php

namespace Core;

use App\ErrorHandler;
use ReflectionMethod;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];

    private $notFoundHandler;

    public function setNotFoundHandler(callable $handler)
    {
        $this->notFoundHandler = $handler;
    }

    public function get($route, $callback)
    {
        $this->addRoute('GET', $route, $callback);
        return $this;
    }

    public function post($route, $callback)
    {
        $this->addRoute('POST', $route, $callback);
        return $this;
    }

    private function addRoute($method, $route, $callback)
    {
        $route = $this->normalizeRoute($route);
        $this->routes[$method][$route] = $callback;
    }

    private function normalizeRoute($route)
    {
        return rtrim($route, '/') ?: '/';
    }

    public function dispatch($uri, $method)
    {
        $uri = $this->normalizeRoute($uri);
        $method = strtoupper($method);

        error_log("Requested URI: $uri, Method: $method");

        if (isset($this->routes[$method][$uri])) {
            $handler = $this->routes[$method][$uri];

            // If handler is an array (Controller method)
            if (is_array($handler)) {
                list($controllerClass, $methodName) = $handler;

                try {
                    // Create controller instance
                    $controller = new $controllerClass();

                    // Use reflection to invoke the method
                    $reflectionMethod = new ReflectionMethod($controllerClass, $methodName);
                    return $reflectionMethod->invoke($controller);
                } catch (\ReflectionException $e) {
                    // Handle reflection errors
                    error_log($e->getMessage());
                    ErrorHandler::handle500('Controller method could not be called');
                }
            }

            // If handler is a callable (closure)
            if (is_callable($handler)) {
                return call_user_func($handler);
            }
        }

        // If no route is found, call the not found handler
        if ($this->notFoundHandler) {
            return call_user_func($this->notFoundHandler);
        }

        // Default 404 handling
        ErrorHandler::handle404();
    }
}
