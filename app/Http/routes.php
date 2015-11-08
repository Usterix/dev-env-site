<?php
use App\Http\Middleware\MenuSystem;
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
Route::get('/', [
    'middleware'=> 'menu',
    'uses' => 'DashboardController@index'
]);
Route::get('sites', [
    'middleware' => 'menu',
    'uses' => 'SitesController@index'
]);
Route::get('server', [
    'middleware' => 'menu',
    'uses' => 'ServerController@index'
]);
Route::get('logins', [
    'middleware' => 'menu',
    'uses' => 'LoginsController@index'
]);
