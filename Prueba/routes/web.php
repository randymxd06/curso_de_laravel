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

/* 
Esto quiere decir que cuando un usuario ingrese al sitio principal o raiz
lo que va a hacer es retornar una vista y esta es la vista welcome
*/
Route::get('/', function () {

    // Vista welcome //
    // return view('welcome');

    // Retorno un mensaje //
    return "Bienvenido a la pagina principal";

});

// Para definir otra ruta escribo lo siguiente //
// NOTA: entre patentesis se pone la ruta o url //
Route::get('cursos', function(){

    // Retorno un mensaje //
    return "Bienvenido a la pagina cursos";

});

// Ya puedo usar un snippet para crear lineas de codigo rapido //
// Route::get

// Como no le estoy pasando ninguna variable borro el parametro de la funcion //
Route::get('cursos/create', function () {
    
    return "En esta pagina podras crear un curso";

});

/* 
NOTA: Para evitar que se nos imprima la ruta que recibe una variable solo hay que cambiar
el orden en que definimos las rutas ya que laravel ejecuta el codigo de arriba hacia abajo
*/

// Podemos usar variables para redirigir las paginas con una misma URL //
// Podemos recibir esa variable como parametro de la funcion //
// Route::get('cursos/{curso}', function($curso){

//     // Puedo imprimir la variable curso //
//     return "Bienvenido al curso de $curso";

// });

// Puedo enviar mas de una variable a la URL //
// Puedo hacer que una de las variables sea opcional en la URL usando el simbolo ? //
// Tambien hay que inicializar la variable que pusimos como opcional //
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    
    // Si la variable es opcional entonces puedo hacer una condicion //
    // Preguntamos que si hay algo almacenado en esta variable entoces imprimimos el siguiente mensaje //
    if($categoria){

        // Imprimo el mensaje que tiene las dos variables //
        return "Bienvenido al curso $curso, de la categoria $categoria";

    }else{ // Caso contrario //

        // Imprimo el mensaje que tiene una sola variable //
        return "Bienvenido al curso de $curso";

    }

});

