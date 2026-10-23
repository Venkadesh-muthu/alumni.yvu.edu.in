<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/about-oia', 'MainController::aboutOia');
$routes->get('/director', 'MainController::director');
$routes->get('/associate-director', 'MainController::associateDirector');
$routes->get('/faculty-visits', 'MainController::facultyVisits');
$routes->get('/postdoctoral', 'MainController::postdoctoral');
$routes->get('/international-seminars', 'MainController::internationalSeminars');
$routes->get('/press-news', 'MainController::pressNews');
$routes->get('/about', 'MainController::about');
$routes->get('/controllers', 'MainController::controllers');
$routes->get('/staff', 'MainController::staff');
$routes->get('/latest-info', 'MainController::latestInfo');
$routes->get('/downloads', 'MainController::downloads');
$routes->get('/contact', 'MainController::contact');
