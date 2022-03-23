<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('acti_id');
            $table->unsignedBigInteger('est_id');

            $table->foreign('acti_id')
                  ->references('id')
                  ->on('actividades')
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
        Schema::dropIfExists('nota');
    }
}
