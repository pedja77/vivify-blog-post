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

//Route::post('/posts/{post_id}/comments', ['as'=> 'comments-post', 'uses'=> 'CommentsController@store']);

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'LoginController@logout');

Route::get('/login', 'LoginController@create')->name('login');

Route::post('/login', 'LoginController@store');

Route::get('/users/{id}', 'UsersController@show')->name('users');

Route::get('/posts/tag/{tag}', 'TagsController@index')->name('posts-tags');