{{-- Aqui abrá un formulario para la creacion de los empleados --}}

{{-- Importo app de los layouts --}}
@extends('layouts.app')

{{-- Abro un section --}}
@section('content')

{{-- Abro un container --}}
<div class="container">

{{-- Hacemos un formulario --}}
{{-- Lo usamos con el metodo post --}}
{{-- El enctype es para que podamos enviar archivos --}}
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">

    {{-- Incluimos el formulario --}}
    @include('empleado.form',['modo'=>'Crear'])

</form> 
{{-- Fin del Formulario --}}

</div>
{{-- Fin del div con la clase container --}}

@endsection
{{-- Fin del section --}}