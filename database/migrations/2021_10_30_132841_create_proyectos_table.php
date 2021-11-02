<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description');
            $table->char('status', 1)->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedInteger('cliente_id');
            $table->unsignedInteger('supplier_id');
            $table->unsignedInteger('jefe_id');
            $table->unsignedInteger('coordinador_id');
            $table->timestamps();

            //foreing key

            $table->foreign('cliente_id')
                ->references('id')
                ->on('suppliers');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');

            $table->foreign('jefe_id')
                ->references('id')
                ->on('users');

            $table->foreign('coordinador_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
