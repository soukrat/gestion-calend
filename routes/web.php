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
    return view('auth.login');
});


Route::group(['prefix' => 'admin'], function() {

Route::resource('users', 'AdminUserController');

Route::resource('etudiants', 'EtudiantController');

Route::resource('intervenants', 'IntervenantController');

Route::resource('intervention', 'InterventionController');

Route::resource('filieres', 'FiliereController');

Route::resource('classes', 'ClasseController');

Route::resource('salles', 'SalleController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
