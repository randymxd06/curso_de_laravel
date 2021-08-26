<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Se le pone @yield porque este contenido sera variable, ósea que cambiará, lo otro no lo hará -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <!-- Estilos -->

</head>
<body>

    <!-- header -->
    <!-- nav -->

    <!-- Acá irá todo el contenido diferente -->
    @yield('content');

    <!-- footer -->
    <!-- script -->

</body>
</html>