<?php

$router = $di->getRouter();

// Default

$router->add(
    '/',
    [
        'controller' => 'home',
        'action' => 'index'
    ]
);
$router->add(
    '/home',
    [
        'controller' => 'home',
        'action' => 'index'
    ]
);
$router->add(
    '/index',
    [
        'controller' => 'home',
        'action' => 'index'
    ]
);
// Define your routes here


$router->handle($_SERVER['REQUEST_URI']);
