<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradaMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada_materials', function (Blueprint $table) {
            $table->id();
            $table -> bigInteger('cantidadMaterial');
            $table -> string('observacion',50);
            $table -> string('estado',50);
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('entrada_id');

            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('entrada_id')->references('id')->on('entradas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrada_materials');
    }
}
