{{-- Importo la plantilla --}}
@extends('layouts.plantilla')

{{-- Le pongo el titulo --}}
@section('title', 'Curso ' . $curso)
    
{{-- Contenido de la página --}}
@section('content')
    {{-- Usamos codigo PHP para mostrar lo de la variable curso como por ejemplo < ? php echo $curso; ? > --}}
    {{-- Pero blade nos ofrece una manera mas facil de poner estas variables solo poniendo doble llaves {{}}  --}}
    <h1>Bienvenido al curso de {{$curso}}</h1>
@endsection