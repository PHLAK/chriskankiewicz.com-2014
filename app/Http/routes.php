<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'root', function () {
    return view('index');
}]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'blog', 'middleware' => ['web']], function () {

    Route::get('/', ['as' => 'blog', 'uses' => 'BlogController@index']);

    Route::get('{slug}', ['as' => 'post', 'uses' => 'BlogController@post']);

    // Route::get('categories', ['as' => 'categories', 'uses' => 'BlogController@categories']);
    // Route::get('category/{category}', ['as' => 'category', 'uses' => 'BlogController@category']);

    // Route::get('tags', ['as' => 'tags', 'uses' => 'BlogController@tags']);
    // Route::get('tag/{tag}', ['as' => 'tag', 'uses' => 'BlogController@tag']);

});

// Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {

//     Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);

//     Route::get('post/create', ['as' => 'post-create', 'uses' => 'PostController@create']);
//     Route::get('post/edit', ['as' => 'post-edit', 'uses' => 'PostController@update']);

// });
