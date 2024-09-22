<?php

require_once "Router.php";

$router = new Router();

$router->addRoute('GET', '/home', function() {
    return "Welcome to the Home Page!";
});

$router->addRoute('GET', '/about', function() {
    return "This is the About Page.";
});

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestPath = '/home'; 

$response = $router->handleRequest($requestMethod, $requestPath);
echo $response;
