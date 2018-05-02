<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/createDeliverable', 'DeliverableController@index');
Route::post('/createDeliverable', 'DeliverableController@createDeliverable');

Route::get('/createTask', 'TaskController@index');
Route::post('/createTask', 'TaskController@createTask');

Route::get('/createResource', 'ResourceController@index');
Route::post('/createResource', 'ResourceController@createResource');