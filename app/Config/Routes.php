<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override('App\Controllers\Nofnd::index'); //ubah
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// kalau mau diarahkan ke modules tertentu
// $routes->get('/', '\App\Modules\Controllers\Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
$uri = explode('/',uri_string());

if(isset($uri[0])){ 
	//ganti jd huruf besar untuk awal kata (menghindari error)
	$mdl = ucfirst($uri[0]); 

	if(file_exists(APPPATH.'Modules/'.$mdl)){ 
		if (file_exists(APPPATH.'Modules/'.$mdl.'/Routes.php')) {
			require_once ('../app/Modules/'.$mdl.'/Routes.php');
		}else{
			$ctr='Home';	$sgm='index';
			if(isset($uri[2])){
				$sgm=$uri[2]; //$sgm = fungsi yg ada di controller
				$ctr=ucfirst($uri[1]); //uri ke 1 = controller

				//routing ke modul+controller+fungsi yg dituju
				$routes->add('/'.$uri[0].'/'.$uri[1].'/'.$uri[2],'\App\Modules\\'.$mdl.'\Controllers\\'.$ctr.'::'.$sgm); 
				$routes->add('/'.$uri[0].'/'.$uri[1].'/'.$uri[2].'/(:any)','\App\Modules\\'.$mdl.'\Controllers\\'.$ctr.'::'.$sgm.'/$1');
			}else if(isset($uri[1])){
				$ctr=ucfirst($uri[1]);

				//routing ke modul + controller yg dituju
				$routes->add('/'.$uri[0].'/'.$uri[1],'\App\Modules\\'.$mdl.'\Controllers\\'.$ctr.'::'.$sgm);
			}else{
				//routing ke modul dg controller utama yg ditampilkan
				$routes->add('/'.$uri[0],'\App\Modules\\'.$mdl.'\Controllers\\'.$ctr.'::'.$sgm);
			}
		}
	}
}

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
