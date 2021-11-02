<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monto', 11, 4);
            $table->string('detalle');
            $table->char('status', 1);
            $table->string('comprobante');
            $table->unsignedInteger('partida_id');
            $table->timestamps();

            $table->foreign('partida_id')
                ->references('id')
                ->on('partidas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costos');
    }
}
