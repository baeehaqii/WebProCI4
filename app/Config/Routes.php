<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TugasController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/web', 'HeaderWeb::index');
$routes->get('/matakuliah', 'Matakuliah::index');
$routes->post('matakuliah/cetak', 'Matakuliah::cetak');