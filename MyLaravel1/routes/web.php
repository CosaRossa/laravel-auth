<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index') -> name('home');

Auth::routes();

// Employees
Route::get('/emp', 'GuestController@index') -> name('emp.index');

Route::get('/emp/create', 'LoggedController@create') -> name('emp.create');
Route::post('/emp/create', 'LoggedController@store') -> name('emp.store');

Route::get('/emp/show/{id}', 'GuestController@show') -> name('emp.show');

Route::get('/emp/edit/{id}', 'LoggedController@edit') -> name('emp.edit');
Route::post('/emp/edit/{id}', 'LoggedController@update') -> name('emp.update');

Route::get('/emp/destroy/{id}', 'LoggedController@destroy') -> name('emp.destroy');
