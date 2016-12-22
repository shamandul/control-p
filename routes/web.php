<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/slack', 'SlackController@index');
Route::get('/registro/email/{token}', 'Auth\RegisterController@confirmEmail');
Route::get('/pdf', 'PdfController@crearPdf');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::match(['get','post'], '/falta/insertar', 'Database\DefaultController@insertar');
