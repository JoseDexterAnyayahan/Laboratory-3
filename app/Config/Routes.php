<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/loginauth', 'AuthController::loginauth');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/registerauth', 'AuthController::registerauth');

$routes->get('/', 'UserController::index');
$routes->get('/products', 'UserController::products');
$routes->get('/contact', 'UserController::contact');
$routes->get('/singleprod/(:num)', 'UserController::singleprod/$1', ['filter' => 'authguard']);

$routes->get('/manage', 'AdminController::index', ['filter' => 'adminfilter']);
$routes->post('/add', 'AdminController::add', ['filter' => 'adminfilter']);
$routes->post('/edit', 'AdminController::edit', ['filter' => 'adminfilter']);
$routes->get('/delete/(:num)', 'AdminController::delete/$1', ['filter' => 'adminfilter']);