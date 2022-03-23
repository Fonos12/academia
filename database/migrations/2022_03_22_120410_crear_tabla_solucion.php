<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSolucion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solucion', function (Blueprint $table) {
            $table->id();

            $table->text('contenido');
            $table->text('ruta_imag');
            $table->text('ruta_arch');
            $table->unsignedBigInteger('cla_id');
            $table->unsignedBigInteger('est_id');

            $table->foreign('cla_id')
                  ->references('id')
                  ->on('clase')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('est_id')
                  ->references('id')
                  ->on('estudiantes')
                  ->onDelete('cascade')
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
        Schema::dropIfExists('solucion');
    }
}
