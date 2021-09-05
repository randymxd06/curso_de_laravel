<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion para mostrar la pagina principal y los datos //
    public function index()
    {

        // Usando el modelo tomamos 5 registros de la base de datos //
        $datos['empleados'] = Empleado::paginate(5);

        // Muestro la pagina principal de los empleados //
        // Le pasamos los datos a la vista //
        return view('empleado.index', $datos);

    }
    // Fin de la funcion index //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Funcion para crear un empleado //
    public function create()
    {
        // Muestro la vista create //
        return view('empleado.create');
    }
    // Fin de la funcion create //

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Funcion para almacenar los datos en la base de datos //
    public function store(Request $request)
    {
        // Capturo los datos de los empleados y los almaceno en una variable //
        // $datosEmpleado = request()->all();

        // Capturo todos los datos y los almaceno exceptuando el token, esto es para que el token no aparezca en el json //
        $datosEmpleado = request()->except('_token');

        // Preguntamos que si en los datos que capturo hay archivos //
        if($request->hasFile('Foto')){

            // Le digo que la almacene en la carpeta uploads //
            $datosEmpleado['Foto'] = $request->file('Foto')->store('uploads', 'public');

        }

        // Insertamos los datos en la tabla de la base de datos //
        Empleado::insert($datosEmpleado);

        // Retorno en formato json todos los datos enviados del formulario //
        return response()->json($datosEmpleado);

    }
    // Fin de la funcion store //

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    // Para mostrar los datos a editar y la vista de edit que tiene el formulario //
    public function edit($id)
    {

        // Almaceno todos los datos que se van a editar en una variable //
        // findOrFail es para buscar un registro pos su ID //
        $empleado = Empleado::findOrFail($id);

        // Muestro la vista edit //
        // Compact es para mandar los datos que estan almacenados en la base de datos y se lo pasamos a la vista usando el metodo compact //
        return view('empleado.edit', compact('empleado'));

    }
    // Fin de la funcion edit //

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    // Funcion para actualizar los datos en la base de datos //
    // Le pasamos el id //
    public function update(Request $request, $id)
    {

        // Capturo todos los datos y los almaceno exceptuando el token y el method, esto es para que el token no aparezca en el json //
        $datosEmpleado = request()->except(['_token', '_method']);

        // Actualizamos los datos en la base de datos //
        Empleado::where('id', '=', $id)->update($datosEmpleado);

        // Almaceno todos los datos que se van a editar en una variable //
        // findOrFail es para buscar un registro pos su ID //
        $empleado = Empleado::findOrFail($id);

        // Muestro la vista edit //
        // Compact es para mandar los datos que estan almacenados en la base de datos y se lo pasamos a la vista usando el metodo compact //
        return view('empleado.edit', compact('empleado'));

    }
    // Fin de la funcion update //

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    // Funcion para borrar los datos de la base de datos //
    public function destroy($id)
    {

        // Usando el modelo empleado borramos el registro usando el metodo destroy y pasandole el id del registro que queremos borrar //
        Empleado::destroy($id);

        // Redireccionamos //
        return redirect('empleado');

    }
    // Fin de la funcion destroy //

}
