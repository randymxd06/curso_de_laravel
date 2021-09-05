{{-- Aqui se mostrara una lista con los empleados --}}

{{-- Hago una tabla --}}
<table class="table table-light">

    {{-- Titulos de la tabla --}}
    <thead class="thead-light">
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead> 
    {{-- Fin de los titulos --}}

    {{-- Contenido de la tabla --}}
    <tbody>

        {{-- Hago un foreach --}}
        {{-- Tomo los datos de la variable empleados de mi controlador del metodo index --}}
        {{-- Muestro los datos de la base de datos --}}
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->Apellido }}</td>
                <td>{{ $empleado->Email }}</td>
                <td>{{ $empleado->Foto }}</td>

                <td>
                    
                    {{-- Este formulario es para enviar el id del usuario que deseo editar --}}
                    {{-- El action hace referencia al metodo DELETE si usamos php artisan route:list veremos porque se pone de esta manera --}}
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                        <button type="submit" value="Editar" onclick="return confirm('Deseas editar el registro?')">Editar</button>
                    </a>
                    
                    {{-- Este formulario es para enviar el id del usuario que deseo borrar usando el motodo post --}}
                    {{-- El action hace referencia al metodo DELETE si usamos php artisan route:list veremos porque se pone de esta manera --}}
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">

                        {{-- Para que laravel recepcione los datos --}}
                        @csrf

                        {{-- Como necesitamos el metodo DELETE y no el POST debemos hacer lo siguiente: --}}
                        {{-- Esto es porque arriba estamos enviando la peticion por metodo post pero para borrar los datos necesitamos el metodo DELETE --}}
                        {{-- Estp es para que el metodo me acepte el borrado con el id que estoy enviando --}}
                        {{ method_field('DELETE') }}

                        {{-- Creo un boton para borrar los datos --}}
                        {{-- onclick es para que cuando le de click el usuario pueda decirle que si o no --}}
                        <button type="submit" value="Borrar" onclick="return confirm('Deseas borrar el registro?')">Borrar</button>

                    </form>

                </td>

            </tr>
        @endforeach 
        {{-- Fin del foreach --}}

    </tbody> 
    {{-- Fin del contenido --}}

</table>
{{-- Fin de la tabla --}}