<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleingresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ingreso')->unsigned();
            $table->integer('id_articulo')->unsigned();
            $table->integer('cantidad');
            $table->double('precio');
            $table->foreign('id_ingreso')->references('id')->on('ingresos')->onDelete('cascade');
            $table->foreign('id_articulo')->references('id')->on('articulos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleingresos');
    }
}
