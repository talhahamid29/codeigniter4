<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about/', 'About::about');
$routes->get('/premium_apartment/', 'Apartments::premium_apartment');
$routes->get('/standard_apartment/', 'Apartments::standard_apartment');
$routes->get('/studio_apartment/', 'Apartments::studio_apartment');
$routes->get('/contact/', 'Contact::contactus');

$routes->get('/admin/', 'AdminHome::index');
$routes->get('/admin2/', 'AdminIndex::index2');
$routes->get('/home/', 'AdminHome::home');
$routes->get('/aboutus/', 'AdminAboutUs::aboutus');
$routes->get('/apartment1/', 'AdminApartment::premiumapartment');
$routes->get('/apartment2/', 'AdminApartment::standardapartment');
$routes->get('/apartment3/', 'AdminApartment::studioapartment');
$routes->get('/contactus/', 'AdminContact::contactus');

$routes->get('/all_home/', 'AdminHome::allhome');
$routes->get('/all_aboutus/', 'AdminAboutUs::all_about');
$routes->get('/all_premium-apartment/', 'AdminApartment::all_premiumapartment');
$routes->get('/all_standard-apartment/', 'AdminApartment::all_standardapartment');
$routes->get('/all_studio-apartment/', 'AdminApartment::all_studioapartment');
$routes->get('/all_contactus/', 'AdminContact::all_contactus');

$routes->get('/adminhome/', 'AdminHome::submitFormData');
$routes->get('/edithome/(:num)', 'AdminHome::edithome/$1');
$routes->get('/update/(:num)', 'AdminHome::update/$1');
$routes->get('/deletehome/(:num)', 'AdminHome::deletehome/$1');

$routes->get('/adminabout/', 'AdminAboutUs::submitAboutFormData');
$routes->get('/editabout/(:num)', 'AdminAboutUs::editabout/$1');
$routes->get('/update/(:num)', 'AdminAboutUs::update/$1');
$routes->get('/deleteabout/(:num)', 'AdminAboutUs::deleteabout/$1');


