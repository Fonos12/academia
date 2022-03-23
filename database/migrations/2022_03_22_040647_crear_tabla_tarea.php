<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();

            $table->string('titulo', 40);
            $table->text('enunciado');
            $table->text('ruta_arch');
            $table->text('ruta_imag');

            $table->unsignedBigInteger('clase_id');

            $table->foreign('clase_id')
                  ->references('id')
                  ->on('clase')
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
        Schema::dropIfExists('tareas');
    }

}
