<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/admin', 'PropertyController::index');
$routes->get('/admin/view_bookings', 'BookingController::index');


$routes->get('/book_now', 'BookingController::bookNow');



