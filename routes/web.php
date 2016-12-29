<?php


Route::get('/', [
  'uses' => 'HomeController@index',
  'as'   => 'home']);
Route::get('/slack', 'SlackController@index');
Route::get('/registro/email/{token}', 'Auth\RegisterController@confirmEmail');
Route::get('/pdf', 'PdfController@crearPdf');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['auth','admin']], function(){
  // Faltas
  Route::match(['get','post'], '/falta/insertar', 'Database\DefaultController@insertar');
  Route::get('/falta/update/{seleccion}', 'Database\DefaultController@modificarGet');
  Route::get('/falta/delete/{seleccion}', 'Database\DefaultController@delete');
  Route::post('/falta/guardar/{seleccion}', 'Database\DefaultController@modificarPut');
  Route::get('/falta/show', 'Database\DefaultController@show');
  // Vacaciones
  Route::resource('vacaciones', 'Database\HolidayController', ['only'=>['create', 'show', 'edit']]);
  Route::post('/vacaciones/store', 'Database\HolidayController@store');
  Route::post('/vacaciones/update/{id}', 'Database\HolidayController@update');
  Route::get('/vacaciones/delete/{id}', 'Database\HolidayController@destroy');
});
