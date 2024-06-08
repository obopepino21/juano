<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/usuarios', 'Home::usuarios');
$routes->get('/buscarU', 'Home::buscarU');
$routes->post('/buscarU', 'Home::buscarU');

$routes->post('/suma', 'restUser::suma');

$routes->get('/login', 'ControleLogin::login');