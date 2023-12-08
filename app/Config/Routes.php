<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('inicio', 'Inicio::index');

$routes->get('inicio/add', 'Inicio::add');

//$routes->post('inicio/store', 'Inicio::add');

$routes->post('inicio/add', 'Inicio::add');


