<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionItemPruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion_item_prueba', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item_prueba')->unsigned();
            $table->text('opcion_respuesta');
            $table->double('valor_escala', 15, 8);
            $table->foreign('id_item_prueba')->references('id')->on('item_prueba')->onDelete('cascade');
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
        Schema::dropIfExists('opcion_item_prueba');
    }
}
