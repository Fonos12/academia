<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaClase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clase', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('doc_id');
            $table->unsignedBigInteger('cur_niv_id');

            $table->foreign('doc_id')
                  ->references('id')
                  ->on('docentes')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('cur_niv_id')
                  ->references('id')
                  ->on('curso_nivel')
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
        Schema::dropIfExists('clase');
    }
}
