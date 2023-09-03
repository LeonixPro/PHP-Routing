<?php

require './core/functions.php';
$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contacts' => 'controllers/contacts.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    stop();
}
