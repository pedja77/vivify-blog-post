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

//use \App\Post;
use \App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostsController@index')->name('all-posts');

Route::get('/posts/{id}', 'PostsController@show')->name('single-post');


Route::get('/post/create', ['as'=> 'create-post', 'uses'=> 'PostsController@create']);

Route::post('/posts', 'PostsController@store');

Route::post('/comment/create', 'CommentsController@store')->name('add-comment');


