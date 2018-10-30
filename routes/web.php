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
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});


/***
 * Fotografo
 */
Route::get('/fotografo', 'FotografoController@inicio');
Route::get('/agregar-fotografia', 'FotografoController@agregarFotografia');
Route::get('/ventas', 'FotografoController@consultarVenta');
Route::post('guardar-fotografia', 'FotografoController@guardarFotografia');

Route::get('registro-fotografo', 'FotografoController@formCrear');
Route::post('guardar-fotografo', 'FotografoController@guardar');
Route::get('editar-fotografo/{id}', 'FotografoController@getFormEdit');
Route::post('actualizar-fotografo/{id}', 'FotografoController@actualizar');

Route::get('login','FotografoController@getLogin');
Route::post('verificarLogin','FotografoController@getVerificationLogin');

 /**
  * Editorial
  */
Route::get('/registroeditorial','EditorialController@getRegistroEditorial');
Route::post('/guardareditorial','EditorialController@guardarEditorial');
Route::get('/logineditorial','EditorialController@getLoginEditorial');
Route::post('/validareditorial','EditorialController@validarEditorial');
Route::get('/inicioeditorial/{id}','EditorialController@getInicioEditorial');

Route::get('/crearreporte/{id}','EditorialController@getRegistroReporte');

Route::post('/guardarreporte/{id}','EditorialController@guardarReporte');

Route::get('/reportegeneral/{id}','EditorialController@getReportes');

Route::get('/enviarfotos/{id}/{fotografo}','EditorialController@getEnvioFotos');

Route::post('/guardarfoto/{id}/{fotografo}','EditorialController@guardarFoto');

/**
 * Admin
 */
Route::get('aceptarfotografo/{id}', 'FotografoController@update');
Route::get('solicitudes','FotografoController@getSolicitudes');

Route::get('verLista','FotografoController@listaFotografos');
Route::get('bajarFotografo/{id}','FotografoController@bajarFotografo');
Route::get('subirFotografo/{id}','FotografoController@subirFotografo');