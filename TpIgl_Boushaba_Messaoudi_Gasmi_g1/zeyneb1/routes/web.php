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

Route::get('/etudiant', 'EtudiantController@index');
Route::get('/acceuil',function(){
return view('acceuil');
});

Route::post('/store', 'FileController@store');
Route::view('/upload', 'upload');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
