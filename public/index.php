<?php

require_once __DIR__ . '/../bootstrap/autoload.php';

use app\Core\Router;

session_start();

$router = new Router();
$router->get('/', "HomeController@index");
$router->get('/like', "LikeController@like");
$router->post('/like', "LikeController@like2");
// $router->get("/books", "BookController@home");
$router->dispatch();