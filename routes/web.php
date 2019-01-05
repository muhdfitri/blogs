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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('post', 'PostsController')->names([
        'create' => 'post.create',
        'store' => 'post.store',
        'update' => 'post.update',
        'destroy' => 'post.delete',
        'edit' => 'post.edit',
        'index' => 'posts'
    ]);

    Route::resource('category', 'CategoriesController')->names([
       'create' => 'category.create',
       'store' => 'category.store',
       'update' => 'category.update',
       'destroy' => 'category.delete',
       'edit' => 'category.edit',
       'index' => 'categories'
   ]);

    Route::resource('tag', 'TagsController')->names([
      'create' => 'tags.create',
      'store' => 'tags.store',
      'update' => 'tags.update',
      'destroy' => 'category.delete',
      'edit' => 'tags.edit',
      'index' => 'tags'
    ]);

    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::put('/changePassword','HomeController@changePassword')->name('changePassword');
});
