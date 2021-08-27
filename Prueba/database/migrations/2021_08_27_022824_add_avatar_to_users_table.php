<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // El metodo table se usa cuando queremos modificar una tabla que ya existe //
        Schema::table('users', function (Blueprint $table) {

            // Aqui debo poner la columna que quiero agregar //
            // Por si tenemos un registro y no queremos que la nueva columna salga vacia //
            // Por si queremos poner la columna en algun lugar que no sea al final usamos el metodo after() //
            $table->string('avatar')->nullable()->after('email'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Le digo que borre la columna //
            $table->dropColumn('avatar');
        });
    }
}
