<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', ['as' => 'root', function() {
    return view('index');
}]);

Route::group(['prefix' => 'blog'], function() {
    Route::get('/', ['as' => 'blog', 'uses' => 'BlogController@posts']);
    Route::get('{slug}', ['as' => 'post', 'uses' => 'BlogController@post']);

    // Route::get('categories', ['as' => 'categories', 'uses' => 'BlogController@categories']);
    // Route::get('category/{category}', ['as' => 'category', 'uses' => 'BlogController@category']);

    // Route::get('tags', ['as' => 'tags', 'uses' => 'BlogController@tags']);
    // Route::get('tag/{tag}', ['as' => 'tag', 'uses' => 'BlogController@tag']);
});

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);

//     Route::get('post/create', ['as' => 'post-create', 'uses' => 'PostController@create']);
//     Route::get('post/edit', ['as' => 'post-edit', 'uses' => 'PostController@update']);
// });
