<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_programa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_programa')->unsigned();
            $table->integer('id_estudiante')->unsigned();
            $table->integer('codigo_universitario');
            $table->tinyInteger('semestre');
            $table->foreign('id_programa')->references('id')->on('programa_academico')->onDelete('cascade');
            $table->foreign('id_estudiante')->references('id')->on('estudiante')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion_programa');
    }
}
