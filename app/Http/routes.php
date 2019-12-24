<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Front end pages
/*Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});*/
Route::get("/crawler", "Crawler@index");

Route::redirect('/','/xsmb');
Route::get("/xsmb", "Results@index");
Route::get("/xsmb/{region}", "Results@show");

Route::get("/xsmn", "Results@xsmnIndex");
Route::get("/xsmn/{region}", "Results@xsmn");

Route::get("/xsmt", "Results@xsmtIndex");
Route::get("/xsmt/{region}", "Results@xsmt");

Route::get("crawler/old", "Crawler@getOldResult");




Route::get("/crawler/current", "Crawler@getCurrentResult");
Route::get("/crawler/xsmn/current", "Crawler@xsmnCurrentResult");


//update current records
Route::get("/updatedatabase/{link}", "Crawler@saveDatabase");
Route::get("/updatexsmt/{link}", "Crawler@xsmtCurrentResult");
Route::get("/reload/{link}", "Crawler@reloadCurrentResult");
Route::get("/getCompanyRegions", "Crawler@getCompanyRegions");


//New code for me....................................
	//Add...............................................
	Route::get('/lots', 'LotsController@index');
	Route::get('/lots/serverSide', [
	   'as'   => 'lots.serverSide',
	   'uses' => 'LotsController@serverside'
	]);
	Route::get('/lots/edit/{id}', 'LotsController@edit');
	Route::post('/lots/update/{id}', 'LotsController@update');
	Route::get('/lots/add', 'LotsController@add');
	Route::post('/lots/store/', 'LotsController@store');
	Route::get('/lots/delete/{id}', 'LotsController@delete');
	// just testing
	Route::get("/lots/result", "LotsController@getCurrentResult");
	//Route::get("/lots/{region}", "LotsController@getAllRegion");
	// New code from repo
	/*Route::get("crawler/old", "Crawler@getOldResult");
	Route::get("/crawler/current", "Crawler@getCurrentResult");
	Route::get("/crawler/xsmn/current", "Crawler@xsmnCurrentResult");*/
	//update current records
	//Route::get("/updatedatabase/{link}", "Crawler@saveDatabase");
	//Route::get("/updatexsmt/{link}", "Crawler@xsmtCurrentResult");
	Route::get('/lots/dropdownlist/{region}', 'LotsController@dropdownlist');
// ...........................................................................






// App pages
Route::auth();

// Authentication Routes...  (Alternative way) Start
$this->get('login', 'Auth\AuthController@showLoginForm');
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm');
$this->post('register', 'Auth\AuthController@register');

//Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');
// END
// LOgged in routes
Route::get('/home', 'HomeController@index');
Route::get('/orders', 'OrdersController@index');

// Orders Datatable

Route::get('/orders/serverSide', [
   'as'   => 'orders.serverSide',
   'uses' => 'OrdersController@serverside'
]);

// Edit
Route::get('/orders/edit/{id}', 'OrdersController@edit');
Route::post('/orders/update/{id}', 'OrdersController@update');
//Add
Route::get('/orders/add', 'OrdersController@add');
Route::post('/orders/store/', 'OrdersController@store');
// delete
Route::get('/orders/delete/{id}', 'OrdersController@delete');

Route::get('/apidetails', 'HomeController@apidetails');

// REST API
Route::group(['prefix' => 'api/v1', 'middleware' => 'auth:api'], function () {
       Route::resource('order', 'OrderAPIContoller');
   });
