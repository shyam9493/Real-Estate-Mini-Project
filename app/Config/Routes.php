<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/admin', 'PropertyController::index');
$routes->post('/admin/add_property', 'PropertyController::addProperty');
$routes->get('/admin/view_bookings', 'BookingController::index');


$routes->get('/book_now', 'BookingController::bookNow'); 
$routes->get('/book_now/view_property/(:num)', 'PropertyController::view_property/$1');
$routes->post('/book_property', 'BookingController::store');



