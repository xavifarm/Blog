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

//Index Antiguo
// Route::get('/', function () {return view('welcome');});
Route::redirect('/', 'blog');

//Index con Bootstrap
// Route::get('/', function(){return view('inicio');});
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Web
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}',   'web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'web\PageController@category')->name('category');
Route::get('etiqueta/{slug}',  'web\PageController@tag')->name('tag');

//Admin
Route::resource('tags',         'Admin\TagController');
Route::resource('categories',   'Admin\CategoryController');
Route::resource('posts',        'Admin\PostController');