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

Route::group(['before'=>'auth'], function() {

    /**
     * Login antes de entrar al dashboard
     *
     */


        Route::get('/', 'HomeController@showWelcome');




});


// route para mostrar login
Route::get('login', 'AutenticacionController@showLogin');

// route para procesar el form
Route::post('login', 'AutenticacionController@doLogin');

//route para desloguear
Route::get('logout', 'AutenticacionController@doLogout');