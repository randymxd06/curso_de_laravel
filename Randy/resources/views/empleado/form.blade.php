{{-- Aqui va a ir el formulario en comun de los archivos create y edit. --}}

{{-- Esto son cosas que van a variar por lo que lo pongo aqui para reutilizarlo --}}

{{-- Titulo de la pagina --}}
<h1>{{$modo}} Empleado</h1>

{{-- Hago un if --}}
@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">

        <ul>

            @foreach($errors->all() as $error)

                <li>
                    {{$error}}
                </li>

            @endforeach

        </ul>

    </div>

@endif
{{-- Fin del if --}}

{{-- Token CSRF --}}
{{-- Esto es una llave de seguridad y con esto ya laravel nos responderá cuando le enviemos la informacion al storage --}}
@csrf

{{-- Input del nombre --}}
<label for="Nombre">Nombre: </label>
<input class="form-control w-50" type="text" name="Nombre" id="Nombre" placeholder="Escribe tu primer nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" required>
<br><br>

{{-- Input del apellido --}}
<label for="Apellido">Apellido: </label>
<input class="form-control w-50" type="text" name="Apellido" id="Apellido" placeholder="Escribe tus apellidos" value="{{ isset($empleado->Apellido)?$empleado->Apellido:'' }}" required>
<br><br>

{{-- Input del correo electronico --}}
<label for="Email">Email: </label>
<input class="form-control w-50" type="email" name="Email" id="Email" placeholder="Escribe tu correo electronico" value="{{ isset($empleado->Email)?$empleado->Email:'' }}" required>
<br><br>

{{-- Input de la imagen --}}
<label for="Foto">Selecciona una imagen: </label>
@if(isset($empleado->Foto))
{{-- Esto es para mostrar la informacion del archivo --}}
{{-- {{ $empleado->Foto }} --}}
{{-- Muestro la imagen --}}
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="Imagen del Empleado">
@endif
<input class="form-control w-50" style="margin-left: 10px" type="file" name="Foto" id="Foto" value="" required>
<br><br>

{{-- Boton enviar --}}
<button class="form-control w-25 btn btn-success" type="submit" value="Enviar">{{$modo}} Datos</button>

<br><br>

{{-- Enlace para regresar a la pagina principal --}}
<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>