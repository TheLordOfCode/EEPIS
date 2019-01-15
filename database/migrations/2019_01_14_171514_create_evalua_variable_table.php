<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluaVariableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evalua_variable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prueba')->unsigned();
            $table->integer('id_variable')->unsigned();
            $table->foreign('id_prueba')->references('id')->on('prueba')->onDelete('cascade');
            $table->foreign('id_variable')->references('id')->on('variables')->onDelete('cascade');
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
        Schema::dropIfExists('evalua_variable');
    }
}
