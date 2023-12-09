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

$routes->get('inicio/edit/(:num)', 'Inicio::edit/$1');

$routes->post('inicio/update', 'Inicio::update');

$routes->post('inicio/delet/(:num)', 'Inicio::delet/$1');

//$routes->post('inicio/delete', 'Inicio::delete');



