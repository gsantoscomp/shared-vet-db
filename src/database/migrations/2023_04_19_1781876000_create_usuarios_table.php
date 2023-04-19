<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100);
            $table->string('senha', 50);
            $table->string('entidade_tipo', 255);
            $table->unsignedBigInteger('entidade_id');
            $table->unsignedBigInteger('tipo_usuario_id');
            $table->timestamps();

            $table->foreign('tipo_usuario_id')->references('id')->on('tipos_usuario');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
