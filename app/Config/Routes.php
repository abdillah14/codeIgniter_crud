<?php

use App\Controllers\StudentControllers;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', [StudentControllers::class, 'index']);
$routes->post('/students/add', [StudentControllers::class, 'store']);
$routes->get('student/delete/(:num)', [StudentControllers::class, 'delete/$1']);