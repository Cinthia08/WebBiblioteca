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
    return view('welcome');
});

Route::get('inicio',function(){
    return view('layout.index');
});

Route::get('ini',function(){
    return view('inises');
 });

Route::get('registra',function(){
    return view('registro');
 });

Route::get('vis',function(){
    return view('vista');
 });


Route::apiResource('apibiblioteca','bibliotecaController');
Route::view('biblio','bibliotecas');

Route::apiResource('apilibro','libroController');
Route::view('libro','libros');

Route::apiResource('apiprestamo','prestamoController');
Route::view('prestamo','prestamos');

Route::apiResource('apilector','lectorController');
Route::view('lector','lectores');

Route::apiResource('apiRol','ApiRoles');

Route::apiResource('apiUsuario','ApiUsuarioController');

Route::post('validar','AccesoController@validar');
