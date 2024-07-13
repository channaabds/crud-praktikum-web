<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/Matakuliah', 'Matakuliah::index'); // Menampilkan daftar matakuliah
$routes->get('/add_data_matakuliah', 'Matakuliah::add_data_matakuliah');
$routes->post('proses_add_matakuliah', 'Matakuliah::proses_add_matakuliah');
$routes->get('/edit_data_matakuliah/(:any)', 'Matakuliah::edit_data_matakuliah/$1');
$routes->post('proses_edit_matakuliah', 'Matakuliah::proses_edit_matakuliah');
$routes->get('/delete_data_matakuliah/(:any)', 'Matakuliah::delete_data_matakuliah/$1');