<?php
$_routes = [
    '/' => ['web', 'index', 'index'],
    '/login' => ['web', 'index', 'login'],
    '/logout' => ['web', 'index', 'logout'],
    
];
$router = Router::getRoute();
$addRoutes = function () use ($router, $_routes) {
    if(array_key_exists($router, $_routes)) {
        Router::addRoute($router, ['module' => $_routes[$router][0], 'controller' => $_routes[$router][1], 'action' => $_routes[$router][2]]);
    } else {
        Router::ErrorPage404();
    }
};
$addRoutes();