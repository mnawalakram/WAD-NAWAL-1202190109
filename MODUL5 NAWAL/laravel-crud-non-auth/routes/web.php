<?php

use Illuminate\Support\Facades\Route;

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

// Route unutk home
Route::get('/', [App\Http\Controllers\Home_controller::class,'index'])->name('index');

// Route untuk vaccines
Route::get('/vaccines', [App\Http\Controllers\Vaccine_controller::class,'index'])->name('vaccines');
Route::get('/vaccines/create', [App\Http\Controllers\Vaccine_controller::class,'create'])->name('vaccines.create');
Route::post('/vaccines/store', [App\Http\Controllers\Vaccine_controller::class,'store'])->name('vaccines.store');
Route::get('/vaccines/edit/{id}', [App\Http\Controllers\Vaccine_controller::class,'edit'])
->name('vaccines.edit');
Route::post('/vaccines/update/{id}', [App\Http\Controllers\Vaccine_controller::class,'update'])
->name('vaccines.update');
Route::post('/vaccines/delete', [App\Http\Controllers\Vaccine_controller::class,'delete'])
->name('vaccines.delete');

// Route untuk patients
Route::get('/patients', [App\Http\Controllers\Patient_controller::class,'index'])->name('patients');
Route::get('/patients/vaccines', [App\Http\Controllers\Patient_controller::class,'vaccines'])->name('patients.vaccines');
Route::post('/patients/create', [App\Http\Controllers\Patient_controller::class,'create'])->name('patients.create');
Route::post('/patients/store', [App\Http\Controllers\Patient_controller::class,'store'])->name('patients.store');
Route::get('/patients/edit/{id}', [App\Http\Controllers\Patient_controller::class,'edit'])
->name('patients.edit');
Route::post('/patients/update/{id}', [App\Http\Controllers\Patient_controller::class,'update'])
->name('patients.update');
Route::post('/patients/delete', [App\Http\Controllers\Patient_controller::class,'delete'])
->name('patients.delete');