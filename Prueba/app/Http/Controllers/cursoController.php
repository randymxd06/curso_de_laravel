<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller{

    // NOTA: Se puede poner el nombre que sea a estos metodos //

    // Para mostrar la pagina principal //
    public function index(){

        return "Bienvenido a la pagina cursos";

    }

    // Para mostrar un formulario //
    public function create(){
        return "En esta pagina podras crear un curso";
    }

    // Para mostrar un elemento particular //
    // Recibo la variable curso //
    public function show($curso){
        return "Bienvenido al curso de $curso";
    }

}
