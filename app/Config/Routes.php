<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/keranjang', 'ExtendsController::home');
$routes->get('/(:num)', 'ExtendsController::detailMahasiswa/$1');
$routes->get('/', 'ExtendsController::index2');
$routes->post('/create', 'ExtendsController::create');