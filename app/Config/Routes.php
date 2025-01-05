<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pemasukan/bulanan', 'Home::pemasukanBulanan');
$routes->get('/pemasukan/export', 'Home::pemasukanExport');
$routes->get('/pemasukan', 'Home::pemasukan');
