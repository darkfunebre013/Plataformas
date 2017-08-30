<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * [Ruta de la pagina principal]
 * @var [type]
 */
Route::get('/','FrontController@index');
/**
 * [Rutas de productos]
 * @var [type]
 */
Route::get('products','FrontController@products');
/**
 * [Ruta de contacto]
 * @var [type]
 */
Route::get('contact','FrontController@contact');
/**
 * [Ruta de inicio de Sesion]
 * @var [type]
 */
Route::get('login','AdminController@login');
/**
 * [Ruta de cierre de sesion]
 * @var [type]
 */
Route::get('logout','AdminController@logout');

Route::resource('user','UserController');
Route::resource('Admin','AdminController');
Route::resource('category','CategoryController');
Route::resource('product','ProductController');
Route::resource('slider','SliderController');
