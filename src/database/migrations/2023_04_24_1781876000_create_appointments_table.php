<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->dateTime('initial_date');
            $table->dateTime('final_date')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
