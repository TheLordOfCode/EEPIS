<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento_identidad')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->integer('telefono');
            $table->integer('celular');
            $table->integer('correo')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *php
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}
