<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCursoNivel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_nivel', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('nivel_id');

            $table->foreign('curso_id')
                  ->references('id')
                  ->on('cursos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('nivel_id')
                  ->references('id')
                  ->on('niveles')
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
        Schema::dropIfExists('curso_nivel');
    }
}
