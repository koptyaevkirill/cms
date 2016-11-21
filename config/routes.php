<?php
$_routes = [
    '/' => ['web', 'index', 'index'],
    '/login' => ['web', 'index', 'login'],
    '/login_check' => ['web', 'index', 'loginCheck'],
    '/logout' => ['web', 'index', 'logout'],
    '/registration' => ['web', 'index', 'registration'],
    '/registration_check' => ['web', 'index', 'registrationSave'],
    '/404' => ['error', 'index', 'error404'],
];
$router = Router::getRoute();
$addRoutes = function () use ($router, $_routes) {
    if(array_key_exists($router, $_routes)) {
        Router::addRoute(['module' => $_routes[$router][0], 'controller' => $_routes[$router][1], 'action' => $_routes[$router][2]]);
    } else {
        Router::ErrorPage404();
    }
};
$addRoutes();