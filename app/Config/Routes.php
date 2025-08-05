<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('auth/logout', 'Auth::logout');
$routes->post('auth/login', 'Auth::login');
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

$routes->group('comensales', function($r){
    $r->get('create', 'Comensales::create');
    $r->post('create','Comensales::create');
    $r->get('',       'Comensales::index');
});

$routes->group('inventario', function($r){
    $r->get('create', 'Inventario::create');
    $r->post('create','Inventario::create');
    $r->get('',       'Inventario::index');
});

$routes->group('recetas', function($r){
    $r->get('create', 'Recetas::create');
    $r->post('create','Recetas::create');
    $r->get('',       'Recetas::index');
});

$routes->get('ping', function(){
    echo 'pong';
});