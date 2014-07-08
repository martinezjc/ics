<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('/articulo/{slug}', 'ArticleController@showArticle');

Route::get('admin/login', 'AccountController@showLogin');

# administracion articulos (noticias)
Route::get('admin/articulos', 'ArticleController@index');
Route::get('admin/articulos/crear', 'ArticleController@create');
Route::get('admin/articulos/edit/{id}', 'ArticleController@edit');

Route::get('admin/articulos/saveArticle', 'ArticleController@save');
Route::get('admin/articulos/edit/updateArticle', 'ArticleController@update');