<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{tasks}','TasksController@show');

Route::get('/','PostsController@index');

// what you need
// Contoller => PostsController
// Eloquent Model => post
// Migration => create_posts_table
