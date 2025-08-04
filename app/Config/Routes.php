<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/login', 'Auth::login');
$routes->get('/', 'Home::index');
