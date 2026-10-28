<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/about', 'MainController::about');
$routes->get('/vision-core-purpose', 'MainController::visionCorePurpose');
$routes->get('/alumni-association', 'MainController::alumniAssociation');
$routes->get('/contact', 'MainController::contact');
