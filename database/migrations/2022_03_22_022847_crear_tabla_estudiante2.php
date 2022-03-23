<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEstudiante2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->text('observacion');
            $table->unsignedBigInteger('persona_id')->unique()->nullable();
            $table->unsignedBigInteger('ppff_id')->nullable();

            $table->foreign('persona_id')
                  ->references('id')
                  ->on('personas')
                  ->onDelete('set null')
                  ->onUpdate('cascade');

            $table->foreign('ppff_id')
                  ->references('id')
                  ->on('ppffs')
                  ->onDelete('set null')
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
        Schema::dropIfExists('estudiantes');
    }
}
