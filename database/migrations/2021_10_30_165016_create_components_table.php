<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->smallInteger('order');
            $table->char('status', 1);
            $table->decimal('presupuesto', 11, 4);
            $table->unsignedInteger('component_id')->nullable();
            $table->unsignedInteger('proyect_id');
            $table->timestamps();

            $table->foreign('proyect_id')
                ->references('id')
                ->on('proyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('components');
    }
}
