{{-- Aqui estará el formulario para editar los datos de los empleados. --}}

{{-- Hago un formulario con el metodo post --}}
{{-- Este formulario es para enviar el id del usuario que deseo editar --}}
{{-- El action hace referencia al metodo DELETE si usamos php artisan route:list veremos porque se pone de esta manera --}}
<form action="{{ url('/empleado/'.$empleado->id) }}" method="post">

    {{-- Como necesitamos el metodo PATCH y no el POST debemos hacer lo siguiente: --}}
    {{-- Esto es porque arriba estamos enviando la peticion por metodo post pero para editar los datos necesitamos el metodo PATCH --}}
    {{-- Estp es para que el metodo me acepte el editado con el id que estoy enviando --}}
    {{method_field('PATCH')}}

    {{-- Incluimos el formulario --}}
    @include('empleado.form')

</form>
