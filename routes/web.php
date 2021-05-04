<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
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

Route::get('/',[StudentsController::class, 'index'] );
Route::get('/mahasiswa/tambah',[StudentsController::class, 'create'] );
Route::get('/mahasiswa/{student}',[StudentsController::class, 'show'] );
Route::get('/mahasiswa/{student}/edit',[StudentsController::class, 'edit'] );

Route::post('/',[StudentsController::class, 'store'] );
Route::patch('/mahasiswa/{student}', [StudentsController::class, 'update']);
Route::delete('/mahasiswa/{student}', [StudentsController::class, 'destroy']);