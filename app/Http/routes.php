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


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('getToken', 'API\APIController@getToken');
Route::controllers([
  'auth'  => 'Auth\AuthController',
  'password'  => 'Auth\PasswordController'
]);

Route::group(['middleware' => 'auth'], function() {
  Route::get('master/currency', 'HomeController@view_Currency');
  Route::get('cronGetCurrency', 'HomeController@get_Currency');
  Route::get('master/language', 'HomeController@view_Lang');
  Route::get('cronGetLanguage', 'HomeController@get_Lang');
  Route::get('master/country', 'HomeController@view_Country');
  Route::get('cronGetCountry', 'HomeController@get_Country');
  Route::get('master/airport', 'HomeController@view_Airport');
  Route::get('cronGetAirport', 'HomeController@get_Airport');
  Route::get('airline/flight', ['as' => 'airline_flight', 'uses' => 'Reservasi@flight']);
  Route::post('airline/flight/search', ['as' => 'ajax_search_flight', 'uses' => 'Reservasi@searchFlight']);
});
