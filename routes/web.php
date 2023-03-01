<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::get('/', 'LandingController@index');
Route::get('/home', 'HomeController@index')->middleware(['web','auth']);
Route::get('/admin-panel', 'AdminController@index')->middleware(['web','auth']);

Route::get('/users', 'UsersController@index')->middleware(['web','auth']);
Route::get('/users/create', 'UsersController@create')->middleware(['web','auth']);
Route::post('/users/store', 'UsersController@store')->middleware(['web','auth']);
Route::get('/users/edit/{id}', 'UsersController@edit')->middleware(['web','auth']);
Route::get('/users/{id}', 'UsersController@show')->middleware(['web','auth']);
Route::put('/users/{id}', 'UsersController@update')->middleware(['web','auth']);
Route::delete('/users/{id}', 'UsersController@destroy')->middleware(['web','auth']);

Route::get('/citizens', 'CitizensController@index')->middleware(['web','auth']);
Route::get('/citizens/create', 'CitizensController@create')->middleware(['web','auth']);
Route::post('/citizens/store', 'CitizensController@store')->middleware(['web','auth']);
Route::get('/citizens/edit/{id}', 'CitizensController@edit')->middleware(['web','auth']);
Route::get('/citizens/{id}', 'CitizensController@show')->middleware(['web','auth']);
Route::put('/citizens/{id}', 'CitizensController@update')->middleware(['web','auth']);
Route::delete('/citizens/{id}', 'CitizensController@destroy')->middleware(['web','auth']);

Route::get('/roles', 'RolesController@index')->middleware(['web','auth']);
Route::get('/roles/{id}', 'RolesController@show')->middleware(['web','auth']);

Route::get('/profile', 'ProfileController@show')->middleware(['web','auth']);
Route::get('/profile/edit', 'ProfileController@edit')->middleware(['web','auth']);
Route::put('/profile', 'ProfileController@update')->middleware(['web','auth']);

Route::get('/states', 'StatesController@index')->middleware(['web','auth']);
Route::get('/lgas', 'LgasController@index')->middleware(['web','auth']);
Route::get('/wards', 'WardsController@index')->middleware(['web','auth']);
