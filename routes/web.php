<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use Hexters\Ladmin\Routes\Ladmin;

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
    return view('index');
});

Auth::routes();

Route::get('/crearClase', [App\Http\Controllers\ClassController::class, 'datosProfesorClase'])->name('crearClase');

Route::get('/crearClase', [App\Http\Controllers\ClassController::class, 'obtenerAlumnos'])->name('crearClase');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('registroEstudiantes', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

Route::get('editarPerfil', [App\Http\Controllers\UserController::class, 'editarPerfil'])->name('editarPerfil');
Route::post('editarPerfil', [App\Http\Controllers\UserController::class, 'actualizarPerfil'])->name('actualizarPerfil');


Ladmin::route(function() {

    Route::resource('/withdrawal', WithdrawalController::class); // Example

});