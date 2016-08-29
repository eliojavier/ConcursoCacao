<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('cedula');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('talla');
            $table->string('direccion');
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tipo')->nullable();
            $table->unsignedInteger('lugar_id');
            $table->unsignedInteger('academia_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
