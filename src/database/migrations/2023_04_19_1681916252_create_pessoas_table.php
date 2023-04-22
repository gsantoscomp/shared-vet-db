<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->string('cpf',11);
            $table->string('cep',8);
            $table->string('logradouro',255);
            $table->string('bairro',100);
            $table->string('cidade',100);
            $table->string('uf',2);
            $table->string('telefone', 11);
            $table->string('numero',10)->nullable();
            $table->string('complemento',255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
