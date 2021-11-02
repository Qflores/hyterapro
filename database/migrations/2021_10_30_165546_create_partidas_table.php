<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cantidad', 11, 4);
            $table->string('name');
            $table->string('description');
            $table->decimal('metrado', 11, 4);
            $table->decimal('unit_cost', 11, 4);
            $table->decimal('new_cost', 11, 4);
            $table->char('status', 1);
            $table->unsignedInteger('unidad_id');
            $table->unsignedInteger('component_id');
            $table->timestamps();

            $table->foreign('component_id')
                ->references('id')
                ->on('components');

            $table->foreign('unidad_id')
                ->references('id')
                ->on('unidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidas');
    }
}
