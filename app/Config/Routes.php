<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/basic/view-where', 'Basic::viewWhere', ['as' => 'where']);
$routes->get('/basic/view-distinct', 'Basic::viewDistinct', ['as' => 'distinct']);
$routes->get('/basic/view-operator-and', 'Basic::viewOperatorAnd', ['as' => 'operator-and']);
$routes->get('/basic/view-operator-or', 'Basic::viewOperatorOr', ['as' => 'operator-or']);
$routes->get('/basic/view-operator-in', 'Basic::viewOperatorIn', ['as' => 'operator-in']);
$routes->get('/basic/view-between', 'Basic::viewBetween', ['as' => 'between']);
$routes->get('/basic/view-like', 'Basic::viewLike', ['as' => 'like']);
$routes->get('/basic/view-is-null', 'Basic::viewIsNull', ['as' => 'is-null']);
$routes->get('/basic/view-alias', 'Basic::viewAlias', ['as' => 'alias']);
$routes->get('/basic/view-inner-join', 'Basic::viewInnerJoin', ['as' => 'inner-join']);
$routes->get('/basic/view-left-join', 'Basic::viewLeftJoin', ['as' => 'left-join']);
$routes->get('/basic/view-group-by', 'Basic::viewGroupBy', ['as' => 'group-by']);
$routes->get('/basic/view-having', 'Basic::viewHaving', ['as' => 'having']);
$routes->get('/basic/view-rollup', 'Basic::viewRollup', ['as' => 'rollup']);



/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
