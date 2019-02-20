<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compra_id')->unsigned();
            $table->string('nombre');
            $table->float('precio');
            $table->integer('categoria_id')->unsigned();
           

            $table->foreign('compra_id', 'fk_detalle_compra_idx')
                ->references('id')->on('compras')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('categoria_id', 'fk_detalle_categoria_idx')
                ->references('id')->on('categorias')
                ->onDelete('restrict')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('detalle_compras');
    }
}
