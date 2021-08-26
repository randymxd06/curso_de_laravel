<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller{

    // NOTA: Se puede poner el nombre que sea a estos metodos //
    // NOTA: Los controladores no son para poner codigo HTML //

    // Para mostrar la pagina principal //
    public function index(){

        // Ingreso a la carpeta cursos y retorno el index //
        return view('cursos.index');

    }

    // Para mostrar un formulario //
    public function create(){

        // Ingreso a la carpeta cursos y retorno el create //
        return view('cursos.create');

    }

    // Para mostrar un elemento particular //
    // Recibo la variable curso //
    public function show($curso){

        // Ingreso a la carpeta cursos y retorno el show //
        // Para pasar el parametro curso como segundo parametro al metodo view le paso un array con el nombre de la variable //
        // return view('cursos.show', ['curso' => $curso]);

        // Tambien puedo usar el metodo compact //
        return view('cursos.show', compact('curso'));
        
    }

}
