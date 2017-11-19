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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

// TODO: Make controllers for Routes, as well as name them, group them and apply middleware.

Route::get('/admin/home', function() {
	return view('admin.home');
})->middleware('auth')->name('admin.home');
Route::get('/admin/blog/new', function() {
	return view('admin.blog.new');
})->middleware('auth')->name('admin.blog.new');
Route::post('blog/new', 'Admin\AdminBlogController@newPost')->middleware('auth')->name('admin.blog.new.post');


