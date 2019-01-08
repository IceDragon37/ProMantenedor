<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('Usuario');
            $table->string('Password');
            $table->string('Permisos');
            $table->string('Empresa');
            $table->string('Contacto');
            $table->string('Email');
            $table->string('Telefono');
            $table->dateTime('FechaPwd');
            $table->string('PasswordAnteriores');
            $table->text('Opciones');
            $table->char('Estado');
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
        Schema::dropIfExists('usuarios');
    }
}
