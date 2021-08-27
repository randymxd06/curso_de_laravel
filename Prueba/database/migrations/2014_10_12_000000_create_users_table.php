<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Integer Unsigned Increment //
            $table->string('name'); // Varchar toma solo 255 caracteres //
            // $table->text('name'); // Si quiero mas de de 255 caracteres uso text() //
            $table->string('email')->unique(); // Esto quiere decir que lo que se almacene aqui es unico //
            $table->timestamp('email_verified_at')->nullable(); // Esto es para guardar fechas para la verificacion de los correos electronicos, si el campo puede quedar vacio le pasamos la propiedad nullable() //
            $table->string('password'); // Esto es para almacenar las contraseñas //
            $table->rememberToken(); // Esto crea una columnas de tipo varchar de tamaño 100, se almacena un token //
            $table->timestamps(); // Esto es para que se quede almacenado la fecha y la hora en la columna create_at cuando introduzcamos lo mismo si actualizamos le pasa a la columna update_at //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
