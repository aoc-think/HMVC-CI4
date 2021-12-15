<?php
// $routes->add("contoh","\app\Modules\Contoh\Controllers\Home::Index");
$routes->group('contoh', ['namespace' => 'App\Modules\Contoh\Controllers'], function ($routes) {
	$routes->get('/', 'Home::index');
	$routes->get('/data', 'Data::index');
	$routes->get('/data/add', 'Data::formadd');
	$routes->post('/data/add', 'Data::proadd');
	$routes->get('/data/edit', 'Data::formedit');
	$routes->put('/data/edit', 'Data::proedit');
	$routes->delete('/data/delete', 'Data::delete');
});