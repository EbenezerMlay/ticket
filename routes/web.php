<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Routes for authentication
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/buses', 'BusesController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/forum', function () {
    return view('forum');
});

/*
|--------------------------------------------------------------------------
| Routes for search
|--------------------------------------------------------------------------
*/
Route::get('/search', 'HomeController@search');

/*
|--------------------------------------------------------------------------
| Routes for ticket
|--------------------------------------------------------------------------
*/

Route::get('display/ticket/{id}', 'BusesController@view');

/*
|--------------------------------------------------------------------------
| Routes for
|--------------------------------------------------------------------------
*/
Route::post('/ticket/booked/{id}', 'TicketController@book');

// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'PaypalController@payWithPaypal'));
// route for post request
Route::post('paypal', array('as' => 'paypal', 'uses' => 'PaypalController@postPaymentWithpaypal'));
// route for check status responce
Route::get('paypal', array('as' => 'status', 'uses' => 'PaypalController@getPaymentStatus'));

