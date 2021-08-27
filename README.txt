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

===========================================================================================================================================
CÓMO CONECTAR CON LA BASE DE DATOS
===========================================================================================================================================

Para conectarnos con la base de datos debemos tener en cuenta que laravel solo trabaja con 4 gestores: MySQL, PostgreeSQL, SQL Server 
y SQLite, una vez tengamos nuestra base de datos solo tenemos que ubicarnos en la ruta: config y ahi se encuentra un archivo llamado
database.php

Para configurar la informacion de laravel tengo que hacerlo en el archivo .env

===========================================================================================================================================
CÓMO HACER UN MIGRATE PARA LA BASE DE DATOS
===========================================================================================================================================

Las migraciones son para llevar un control de versiones de la base de datos.

En la terminal debemos usar el siguiente comando:

php artisan migrate

Esto ejecuta el metodo up y se crearan todas las tablas con sus respectivas columnas.

NOTA: hay que tener bien configurado el archivo .env

Para crear un migrate debemos ejecutar el siguiente comando:

php artisan make:migration create_nombreMigracion_table

Para revertir los cambios del migrate usamos el siguiente comando:

php artisan migrate:rollback

Si en dado caso quiero agregar una columna a una tabla pero no puedo hacer migrate debo utilizar el siguiente comando:

php artisan migrate:fresh

Esto lo que va a hacer borrar todas las tablas y crearlas denuevo con las nuevas columnas.

NOTA: Si la tabla tiene algun registro, no debo usar este comando porque borra la tabla con todo y registros y la crea de nuevo.

Si quiere agregar una columna pero que el codigo primero ejecute el metodo down antes que el up uso el siguiente comando:

php artisan migrate:refresh

Para agregar una columna a alguna tabla debemos ejecutar el siguiente comando en la terminal:

php artisan make:migration add_nombreColumna_to_nombreTabla_table

Si quiero modificar algun tipo de propiedad de una columna o tabla debo agregar una dependencia al archivo .json del proyecto usando el siguiente
comando:

composer require doctrine/dbal

Creo una nueva migracion 











