<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->match(['get', 'post'], '/', 'Auth::login');
$routes->match(['get', 'post'], '/register', 'Auth::register');
$routes->match(['get', 'post'], '/upload', 'Article::index');
$routes->get('/logout', 'Auth::logout');

$routes->post('login', 'Auth::login_real');
$routes->post('registry', 'Auth::inputRegister');

$routes->match(['get', 'post'], '/dashboard', 'Dashboard::index');

$routes->post('article/create', 'Article::create');
$routes->match(['get', 'post'], 'article/update/(:any)', 'Article::ubah/$1');
$routes->post('article/ubah/(:any)', 'Article::update/$1');
$routes->get('article/delete/(:any)', 'Article::delete/$1');

