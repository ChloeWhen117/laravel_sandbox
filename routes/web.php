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

// Main Routes

Route::get('/', 'MainController@home');
Route::get('/home', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/contact', 'MainController@contact');

// Projects

Route::resource('projects', 'ProjectsController');
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::post('/projects', 'ProjectsController@store');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');

// Project Tasks
Route::patch('/projects/{project}/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::Get('/phpinfo', function() {
    phpinfo();
});

Auth::routes();
