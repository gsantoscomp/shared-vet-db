<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInUsuTable extends Migration
{
    public function up()
    {
        Schema::create('in_usu', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nome',50);
            $table->string('telefone',20);
            $table->string('email',50);
            $table->string('logradouro',100);
            $table->string('cidade',50);
            $table->string('uf',2);
            $table->string('cep',20);
            $table->string('cnpj',14);
            $table->string('cpf', 11);
            $table->string('rg',20);
            $table->string('usuario',50);
            $table->string('senha',32);
            $table->string('banco',5);
            $table->string('agencia',10);
            $table->string('conta_corrente',20);
            $table->string('logo',50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('in_usu');
    }
}