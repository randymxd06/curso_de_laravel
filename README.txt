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

===========================================================================================================================================
CÓMO CREAR UN CONTROLADOR DESDE LA TERMINAL
===========================================================================================================================================

Para crear un controlador tenemos que ubicarnos en la ruta app/Http/Controllers

Me ubico con la terminal en la siguiente ruta: D:\xampp\htdocs\curso_de_laravel\Prueba

luego usamos el siguiente comando:

php artisan make:controller nombre_del_controlador

Una vez creado debemos ir a web.php y arriba poner un use y la ruta del controlador

