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


Route::get('/company', function () {
    return view('company');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/', 'HomeController@index');

Route::post('/company', 'CompanyController@companyAdd');


Route::resource('employees', 'EmployeeController');