<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

get/projects(index)
get/project/create (create)
get/project/1 (show)
post/project(store)
get/project/edit (edit)
patch/project/1 (update)
delete/project/1 (destroty)

|
*/

// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');
// Route::get('/contact', 'PagesController@contact');


// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create');
 
Route::resource('/projects', 'ProjectsController');