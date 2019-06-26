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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('enfermedades/destroyAll', 'EnfermedadController@destroyAll')->name('enfermedades.destroyAll');
Route::resource('pacientes','PacienteController');
Route::resource('enfermedades','EnfermedadController');
Route::resource('tratamientos','TratamientoController');
Route::resource('medicamentos','MedicamentoController');
Route::resource('especialidades', 'EspecialidadController');
Route::resource('medicos', 'MedicoController');
Route::resource('trat_meds', 'Trat_MedController');
Route::resource('enf_pacs', 'Enf_PacController');
Route::resource('alarmas','AlarmaController');