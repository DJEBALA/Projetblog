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


Route::get('/', 'HomeController@index');
Route::get('/Articles', 'ArticlesController@index');
Route::get('/Contact', 'ContactController@index');
// Lorsqu’un visiteur du 
//blog arrive sur l’URL “/”, appelle la fonction index 
//du contrôleur qui s’appelle HomeController.
Route::get('Articles/{post_name}', 'ArticlesController@show');

  









