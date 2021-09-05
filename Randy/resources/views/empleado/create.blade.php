{{-- Aqui abrá un formulario para la creacion de los empleados --}}

{{-- Hacemos un formulario --}}
{{-- Lo usamos con el metodo post --}}
{{-- El enctype es para que podamos enviar archivos --}}
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">

    {{-- Incluimos el formulario --}}
    @include('empleado.form')

</form> 
{{-- Fin del Formulario --}}
