{{-- Aqui va a ir el formulario en comun de los archivos create y edit. --}}

{{-- Esto son cosas que van a variar por lo que lo pongo aqui para reutilizarlo --}}

{{-- Token CSRF --}}
{{-- Esto es una llave de seguridad y con esto ya laravel nos responderá cuando le enviemos la informacion al storage --}}
@csrf

{{-- Input del nombre --}}
<label for="Nombre">Nombre: </label>
<input type="text" name="Nombre" id="Nombre" placeholder="Escribe tu primer nombre" value="{{ $empleado->Nombre }}" required>
<br><br>

{{-- Input del apellido --}}
<label for="Apellido">Apellido: </label>
<input type="text" name="Apellido" id="Apellido" placeholder="Escribe tus apellidos" value="{{ $empleado->Apellido }}" required>
<br><br>

{{-- Input del correo electronico --}}
<label for="Email">Email: </label>
<input type="email" name="Email" id="Email" placeholder="Escribe tu correo electronico" value="{{ $empleado->Email }}" required>
<br><br>

{{-- Input de la imagen --}}
<label for="Foto">Selecciona una imagen: </label>
{{-- Esto es para mostrar la informacion del archivo --}}
{{ $empleado->Foto }}
<input style="margin-left: 10px" type="file" name="Foto" id="Foto" value="">
<br><br>

{{-- Boton enviar --}}
<button type="submit" value="Enviar">Enviar</button>