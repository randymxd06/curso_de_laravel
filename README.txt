Despues de instalar composer debemos hacer lo siguiente:

===========================================================================================================================================
COMANDO PARA INSTALAR LARAVEL
===========================================================================================================================================

Usar comando para instalar el instalador de laravel desde la terminal:

composer global require laravel/installer

===========================================================================================================================================
COMANDO PARA INICIAR UN NUEVO PROYECTO DE LARAVEL
===========================================================================================================================================

Para crear un nuevo proyecto usamos el siguiente comando en la terminal:

laravel new nombre_del_proyecto

===========================================================================================================================================
EXTENSION DE LARAVEL PARA VISUAL STUDIO CODE
===========================================================================================================================================

Para evitar tener que escribir mucho codigo usamos la extension de visual studio code:

Laravel Snippets

PHP Intelephense

Laravel Blade Snippets

===========================================================================================================================================
CÓMO CREAR UN CONTROLADOR DESDE LA TERMINAL
===========================================================================================================================================

Para crear un controlador tenemos que ubicarnos en la ruta app/Http/Controllers

Me ubico con la terminal en la siguiente ruta: D:\xampp\htdocs\curso_de_laravel\Prueba

Tambien puedo hacerlo desde la terminal de visual studio code

luego usamos el siguiente comando:

php artisan make:controller nombre_del_controlador

Una vez creado debemos ir a web.php y arriba poner un use y la ruta del controlador

===========================================================================================================================================
CÓMO CREAR UNA VISTA
===========================================================================================================================================

Para crear una vista tenemos que ubicarnos en la ruta: resources/views

lo mejor es usar el nombre de los metodos para los archivos .php

===========================================================================================================================================
CÓMO CREAR LAYOUTS
===========================================================================================================================================

Para crear layouts solo tenemos que ubicarnos en la ruta: resources/views

Y creamos una carpeta llamada layouts, esta nos sirve para todo el contenido que sea igual en la pagina por ejemplo el head el footer, etc.

usamos el metodo @yield() para todo lo que no va a cambiar en la pagina

NOTA: un archivo .php no reconoce los archivos .blade.php asi que tenemos que cambiar la extension de los archivos .php

@extends para importar la plantilla de la carpeta layouts

@section hacer las cosas dinamicas o escribir codigo HTML

Si queremos escribir mas de una linea de codigo HTML usamos @section y terminamos con endsection

