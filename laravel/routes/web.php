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
Route::get('/', 'Auth\LoginController@login')->name('login');
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('/', 'Auth\LoginController@logout');
Route::get('/dashboard', 'dashboardController@index');
Route::resource('appointment', 'appointmentController');
Route::resource('customer', 'customerController');
Route::resource('invoice', 'invoiceController');
Route::resource('offer', 'offerController');
Route::resource('project', 'projectController');

