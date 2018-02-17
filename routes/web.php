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

Route::get('/auth/facebook', 'SocialAuthController@facebook');				//Rutas de autentificación con fb
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');		//
Route::post('/auth/facebook/register', 'SocialAuthController@register');	//

Route::get('/', 'PagesController@show');									// Ruta principal

Route::get('/index/{username}', 'ViajesController@show');					// Ruta que mostrara los viajes

Route::get('/home', 'HomeController@index')->name('home');					// Ruta que redirecciona a index

Route::post('/index/{username}/create', 'ViajesController@create');
