<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth/login', 'Api\AuthController@login');
Route::post('auth/refresh', 'Api\AuthController@refresh');
Route::get('auth/logout', 'Api\AuthController@logout');
Route::get('role', 'Api\UserController@role');
Route::get('roles', 'Api\AuthController@role');

Route::group(['middleware' => 'jwt.auth', 'namespace' => 'Api\\'], function() {

    Route::get('auth/me', 'AuthController@me');

    Route::get('modalidad', 'ModalidadController@index');

    Route::get('persona', 'UserController@index');
    Route::post('persona', 'UserController@store');
    Route::put('persona/{id}', 'UserController@update');
    Route::delete('persona/{id}', 'UserController@destroy');

    Route::get('getestudiante', 'InscripcionController@estudiante');
    Route::get('getdocente', 'InscripcionController@docente');

    Route::get('inscripcion', 'InscripcionController@index');
    Route::post('inscripcion', 'InscripcionController@store');
    Route::put('inscripcion/{id}', 'InscripcionController@update');
    Route::delete('inscripcion/{id}', 'InscripcionController@destroy');

    Route::get('crondef', 'CronDefController@index');
    Route::post('crondef', 'CronDefController@store');
    Route::put('crondef/{id}', 'CronDefController@update');
    Route::delete('crondef/{id}', 'CronDefController@destroy');
    Route::get('cronogramaactivos', 'CronDefController@getInscripcionActivos');

    Route::get('tribunal', 'TribunalController@index');
    Route::post('tribunal', 'TribunalController@store');
    Route::put('tribunal/{id}', 'TribunalController@update');
    Route::delete('tribunal/{id}', 'TribunalController@destroy');
    Route::get('defunoaprobado', 'TribunalController@defensaUnoAprobado');

    Route::get('cronoact', 'CronogramaActController@index');
    Route::post('cronoact', 'CronogramaActController@store');
    Route::put('cronoact/{id}', 'CronogramaActController@update');
    Route::delete('cronoact/{id}', 'CronogramaActController@destroy');

    Route::get('planilla/{id}', 'PlanillaControlController@index');
    Route::post('planilla', 'PlanillaControlController@store');
    Route::put('planilla/{id}', 'PlanillaControlController@update');
    Route::get('planillainscrip/{id}', 'PlanillaControlController@inscripcion');
    Route::get('planillatutors/{id}', 'PlanillaControlController@tutor');

    Route::get('planillatutor/{id}', 'PlanillaContTutorController@index');
    Route::post('planillatutor', 'PlanillaContTutorController@store');
    Route::put('planillatutor/{id}', 'PlanillaContTutorController@update');
    Route::put('aprobadouno/{id}', 'PlanillaContTutorController@aprobadouno');

    Route::get('tutortribunales/{id}', 'TutorTribunalController@index');

    Route::get('tribunalnotas/{id}', 'TribunalNotasController@index');
    Route::put('tribunalnotas/{id}', 'TribunalNotasController@update');

    Route::get('encargadoinforme/{id}', 'EncargadoController@index');

    Route::get('facultad', 'FacultadCarrera@index');
    Route::get('carrerafacultad/{id}', 'FacultadCarrera@carrerafacultad');

    Route::get('reportema', 'FacultadCarrera@reportemas');
});
