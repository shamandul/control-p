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
Route::get('/falta/update/{seleccion}', 'Database\DefaultController@modificarGet');
Route::get('/falta/delete/{seleccion}', 'Database\DefaultController@delete');
Route::post('/falta/guardar/{seleccion}', 'Database\DefaultController@modificarPut');
Route::get('/falta/show', 'Database\DefaultController@show');
Route::resource('holiday', 'Database\HolidayController');
