<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller{

    // Definimos un metodo usando la palabra public //
    // Este metodo se llamara __invoke //
    // Ponemos el codigo que tenia anterior mente donde yo declaraba la ruta //
    // El __invoke se usa cuando queremos que el controlador administre una sola ruta //
    public function __invoke(){

        // Vista welcome //
        // return view('welcome');

        // Retorno un mensaje //
        return "Bienvenido a la pagina principal";

    }

}
