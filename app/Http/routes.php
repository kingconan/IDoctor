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


Route::get('/', 'Backend\DoctorController@index');
Route::get('/about', 'Backend\DoctorController@about');
Route::get('/examination', 'Backend\DoctorController@examination');
Route::get('/beauty', 'Backend\DoctorController@beauty');
Route::get('/treatment', 'Backend\DoctorController@treatment');
Route::get('/escort', 'Backend\DoctorController@escort');
Route::get('/rehabilitation', 'Backend\DoctorController@rehabilitation');
Route::get('/expert', 'Backend\DoctorController@expert');
Route::get('/contact', 'Backend\DoctorController@contact');
Route::get('/remote', 'Backend\DoctorController@remote');