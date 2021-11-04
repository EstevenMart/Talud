<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table -> string('peso',50);
            $table -> string('tamano',50);
            $table -> bigInteger('cantidad');
            $table -> string('estado',50);
            $table->unsignedBigInteger('tipo_material_id');
            $table->unsignedBigInteger('marca_id');

            $table->timestamps();

            $table->foreign('tipo_material_id')->references('id')->on('tipo_materials');
            $table->foreign('marca_id')->references('id')->on('marcas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
