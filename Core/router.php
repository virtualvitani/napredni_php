<?php

$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

$routes = require base_path('routes.php');

function routeToController(string $uri, array $routes)
{
    if (array_key_exists($key, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

routeToController($uri. $routes);

