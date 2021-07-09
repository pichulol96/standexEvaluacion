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
//ruta que se carga al iniciar la pagina
Route::get('/', function () {
    return view('welcome');
});

//ruta que se carga cuando el usuario va a la parte de consultas del menu
Route::get('crud/consulta', [App\Http\Controllers\personaController::class, 'get_personas'])->name('consultas');

//ruta que se carga cuando el usuario va a la parte de registros del menu
Route::get('crud/registro', function () {
    return view('crud/registro');
});

//rutas que se llama cuando el usuario da click al boton de registros
Route::post('crud/registrar', [App\Http\Controllers\personaController::class, 'registro_personas'])->name('registro');

//ruta que se llama cuando el usuario elimina un registro
Route::delete('eliminar/{id}', [App\Http\Controllers\personaController::class, 'delete_persona'])->name('eliminar');

//ruta que se llama cuando el usuario actualiza un registro
Route::post('editar', [App\Http\Controllers\personaController::class, 'editar_persona'])->name('editar');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
