<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj',14);
            $table->string('razao_social',255);
            $table->string('nome_fantasia',255)->nullable();
            $table->string('logradouro',255);
            $table->string('bairro',100);
            $table->string('cep',8);
            $table->string('telefone',11);
            $table->string('numero',10)->nullable();
            $table->string('complemento',255)->nullable();
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
