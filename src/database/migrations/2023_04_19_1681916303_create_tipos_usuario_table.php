<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposUsuarioTable extends Migration
{
    public function up()
    {
        Schema::create('tipos_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_usuario',100);
            $table->text('detalhes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipos_usuario');
    }
}
