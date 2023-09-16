<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/main', 'MainController::index');
$routes->get('/add', 'MainController::add');
$routes->post('/save', 'MainController::save');
