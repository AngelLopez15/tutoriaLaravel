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
        // Blueprint se usa para crear las columnas de nuestras tablas
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Entero autoasignado e incremental
            $table->string('name'); //de tipo varchar solo 250 caracteres
            // $table->text('name'); //por si necesitamos mas caracteres que un string
            $table->string('email')->unique(); // campo unico
            $table->timestamp('email_verified_at')->nullable(); // fecha en que se verfico el correo electronico
            // es nullable por que este campo va quedar nulo en la base de datos.
            $table->string('password');
            $table->rememberToken(); //varchar de tamaño 100 para almacenar el token
            $table->timestamps(); // crea dos culumnas crear y actualizar base created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // metodo para eliminar la tabla user
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
