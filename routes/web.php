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

Route::get('/', 'EmployeeController@index');
Route::post('/editData', 'EmployeeController@update')->name('updateData');
Route::post('/removeData', 'EmployeeController@DeleteRecord')->name('remove');
Route::resource('employees', 'EmployeeController');
