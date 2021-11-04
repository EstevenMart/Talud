<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_materials', function (Blueprint $table) {
            $table->id();
            $table -> string('estado',50);
            $table -> bigInteger('cantidadMaterial');
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('salida_id');

            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('salida_id')->references('id')->on('salidas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida_materials');
    }
}
