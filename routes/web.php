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

Route::get('/', function () { //anonymous function
    return view('welcome');
});

// will execute by calling controller function "index","create"
// controllerName@method/functionName
Route::group(['middleware' => 'auth'], function(){

    Route::get('/posts', 'PostsController@index')->name('posts.index');
    Route::get('/posts/create', 'PostsController@create')->name('posts.create');
    // Routes to Store to DB
    Route::post('/posts', 'PostsController@store')->name('posts.store');
    //Route to update
    Route::put('/posts/{post}', 'PostsController@update')->name('posts.update');
    //Route to EDIT
    Route::get('/posts/{post}/edit', 'PostsController@edit')->name('posts.edit');
    //Route to Show
    Route::get('/posts/{post}', 'PostsController@show')->name('posts.show');
    //Route to Delete
    Route::delete('/posts/{post}/destroy', 'PostsController@destroy')->name('posts.destroy');

    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
