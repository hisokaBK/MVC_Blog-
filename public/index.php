<?php

require_once __DIR__ . '/../bootstrap/autoload.php';

use app\Core\Router;

session_start();

$router = new Router();
$router->get('/', "HomeController@index");

$router->get('/login', "AuthController@loginView");
$router->post('/login', "AuthController@login");

$router->get('/logout', "AuthController@logout");

$router->get('/profil', "ProfilController@profilView");

$router->get('/register', "AuthController@registerView");
$router->post('/register', "AuthController@register");

$router->get('/blogs', "ArticleController@articlesView");
$router->post('/blogs', "ArticleController@addArticles");

$router->get('/new_blog', "ArticleController@addarticlView");
$router->post('/new_blog', "ArticleController@addArticle");

$router->get('/delete_blog', "ArticleController@removeArticle");

$router->get('/update_blog', "ArticleController@updateArticleView");
$router->post('/update_blog', "ArticleController@updateArticle");

$router->get('/bord_author', "Bord_authorController@authorView");

$router->get('/bord_admin', "Bord_adminController@adminView");

$router->get('/Categorys', "Bord_adminController@Categorys_View");

$router->post('/createCategory', "CategoryController@createCategory");
$router->post('/editCategory'  , "CategoryController@editCategory");
$router->get('/deleteCategory', "CategoryController@deleteCategory");

$router->get('/ban', "BanController@ban");
$router->get('/unban', "BanController@unban");

$router->get('/one_blog', "OneArticlController@one_articl");

$router->get('/like', "LikeController@like");

$router->post('/commenter', "CommenterController@commenter");


$router->get('/about', "AboutController@aboutView");

$router->get('/404', "NotFondController@notFondView");

$router->dispatch();
if(isset($_SESSION['error']))unset($_SESSION['error']);