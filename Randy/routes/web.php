<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpleadoController;

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

// Ruta principal //
Route::get('/', function () {
    return view('auth.login');
});

// Para acceder a todas las URL del controlador Empleado //
// El middleware('auth') es para que si estoy en el login y trato de ingresar a una ruta sin estar logeado me mande al login hasta autentificarme //
Route::resource('empleado', EmpleadoController::class)->middleware('auth');

// Esto es para que no me aparezca el register y el reset en la vista //
Auth::routes(['register'=>false, 'reset'=>false]);

// Ya no necesito HomeController 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

// Cuando el usuario se loggee se va a ir al index de EmpleadoController
Route::group(['middleware' => 'auth'], function(){

    Route::get('/', [EmpleadoController::class, 'index'])->name('home');

});
