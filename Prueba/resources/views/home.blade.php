
{{-- NOTA: un archivo .php no reconoce los archivos .blade.php asi que tenemos que cambiar la extension de los archivos .php --}}

{{-- Para heredar todo lo de la plantilla --}}
@extends('layouts.plantilla')

{{-- Para llenar de contenido del yield que tiene el título --}}
@section('title', 'Home')

{{-- Para llenar el contenido del yield que tiene el contenido --}}
{{-- Por si tenemos más de una línea de código HTML --}}
@section('content')
    <h1>Bienvenido a la pagina principal</h1>
@endsection