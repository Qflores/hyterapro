<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('monto', 11, 4);
            $table->date('fecha_inico');
            $table->date('fecha_fin');
            $table->char('status');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('egresos');
    }
}
