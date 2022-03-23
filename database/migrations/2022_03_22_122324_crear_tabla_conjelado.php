<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaConjelado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conjelados', function (Blueprint $table) {
            $table->id();

            $table->text('observacion');
            $table->unsignedBigInteger('est_id')->unique()->nullable();

            $table->foreign('est_id')
                  ->references('id')
                  ->on('estudiantes')
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
        Schema::dropIfExists('conjelados');
    }
}
