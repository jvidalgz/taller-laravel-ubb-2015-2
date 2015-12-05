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

Route::get('/', function () {
    return view('welcome');
});
Route::get('ramos', 'RamoController@index'); // Mostrar todos los ramos
Route::get('ramos/create', 'RamoController@create'); // Mostrar el formulario para crear un nuevo ramo
Route::get('ramos/{id}', 'RamoController@show'); // Mostrar un ramo en particular, identificado con PK 'id'
Route::post('ramos', 'RamoController@store'); // Almacenar los datos enviados desde el formulario de creacion
Route::get('ramos/{id}/edit', 'RamoController@edit'); // Muestra un formulario pre-cargado con los datos del ramo 'id'
Route::put('ramos/{id}', 'RamoController@update'); // Actualiza los datos desde el formulario para editar un ramo

