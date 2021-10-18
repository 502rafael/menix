<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalledevolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalledevoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_devolucion')->unsigned();
            $table->integer('id_factura')->unsigned();
            $table->integer('id_articulo')->unsigned();
            $table->integer('cantidad');
            $table->double('total',11,2);
            $table->foreign('id_devolucion')->references('id')->on('devoluciones');
            $table->foreign('id_factura')->references('id')->on('facturas');
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
        Schema::dropIfExists('detalledevoluciones');
    }
}
