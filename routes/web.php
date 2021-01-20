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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/list','App\Http\Controllers\EmployeeController@list')->name('list_employees');
Route::get('/form/{id?}','App\Http\Controllers\EmployeeController@form')->name('employees_form');
Route::post('/save','App\Http\Controllers\EmployeeController@save')->name('save_employees');
Route::get('/view/{id?}','App\Http\Controllers\EmployeeController@view')->name('view_employees');
Route::get('/delete/{id?}','App\Http\Controllers\EmployeeController@delete')->name('delete_employees');
Route::get('/export','App\Http\Controllers\EmployeeController@export')->name('export');
