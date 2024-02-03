<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Satriabimantara\BelajarPhpMvc\App\Router;
use Satriabimantara\BelajarPhpMvc\Controller\HomeController;
use Satriabimantara\BelajarPhpMvc\Controller\ProductController;
use Satriabimantara\BelajarPhpMvc\Controller\UserController;
use Satriabimantara\BelajarPhpMvc\Middleware\LoginAuthMiddleware;

Router::add('GET', '/', HomeController::class, 'index');

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories', [LoginAuthMiddleware::class]);
Router::add('GET', '/hello', HomeController::class, 'hello', [LoginAuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [LoginAuthMiddleware::class]);
Router::add('GET', '/login', UserController::class, 'login');
Router::add('GET', '/logout', UserController::class, 'logout', [LoginAuthMiddleware::class]);
Router::add('POST', '/login', UserController::class, 'login');
Router::add('POST', '/logout', UserController::class, 'logout');
// Router::add('GET', '/register', 'UserController', 'register');

Router::run();
