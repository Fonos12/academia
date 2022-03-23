<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->id();

            $table->text('contenido');
            $table->text('ruta_imag');
            $table->text('ruta_arch');
            $table->unsignedBigInteger('doc_id');
            $table->unsignedBigInteger('ppf_id');

            $table->foreign('doc_id')
                  ->references('id')
                  ->on('docentes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('ppf_id')
                  ->references('id')
                  ->on('ppffs')
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
        Schema::dropIfExists('mensaje');
    }
}
