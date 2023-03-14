<?php

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::controller(ClasseController::class)->group(function () {
    Route::get('/classe', 'index')->name('classe_index');
    Route::get('/classe/create', 'create')->name('classe_create');
    Route::post('/classe/store', 'store')->name('classe_store');
    Route::get('/classe/{id}', 'show')->name('classe_show');
    Route::get('/classe/edit/{id}', 'edit')->name('classe_edit');
    Route::post('/classe/update/{id}', 'update')->name('classe_update');
    Route::get('/classe/destroy/{id}', 'destroy')->name('classe_destroy');
    Route::get('/classe/{id}/etudiant', 'classe_number_etudiant')->name('classe_number_etudiant');
    Route::get('/classe/{id}/prof', 'classe_number_prof')->name('classe_number_prof');
});

Route::controller(EtudiantController::class)->group(function () {
    Route::get('/etudiant', 'index')->name('etudiant_index');
    Route::get('/etudiant/create', 'create')->name('etudiant_create');
    Route::post('/etudiant/store', 'store')->name('etudiant_store');
    Route::get('/etudiant/{id}', 'show')->name('etudiant_show');
    Route::get('/etudiant/edit/{id}', 'edit')->name('etudiant_edit');
    Route::post('/etudiant/update/{id}', 'update')->name('etudiant_update');
    Route::get('/etudiant/destroy/{id}', 'destroy')->name('etudiant_destroy');
});

Route::controller(CoursController::class)->group(function () {
    Route::get('/cour', 'index')->name('cour_index');
    Route::get('/cour/create', 'create')->name('cour_create');
    Route::post('/cour/store', 'store')->name('cour_store');
    Route::get('/cour/{id}', 'show')->name('cour_show');
    Route::get('/cour/edit/{id}', 'edit')->name('cour_edit');
    Route::post('/cour/update/{id}', 'update')->name('cour_update');
    Route::get('/cour/destroy/{id}', 'destroy')->name('cour_destroy');
});

Route::controller(ProfController::class)->group(function () {
    Route::get('/prof', 'index')->name('prof_index');
    Route::get('/prof/create', 'create')->name('prof_create');
    Route::post('/prof/store', 'store')->name('prof_store');
    Route::get('/prof/{id}', 'show')->name('prof_show');
    Route::get('/prof/edit/{id}', 'edit')->name('prof_edit');
    Route::post('/prof/update/{id}', 'update')->name('prof_update');
    Route::get('/prof/destroy/{id}', 'destroy')->name('prof_destroy');
});