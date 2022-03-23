<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPpff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppffs', function (Blueprint $table) {
            $table->id();
            $table->text('ocu_labo');
            $table->unsignedBigInteger('persona_id')->unique()->nullable();
            $table->foreign('persona_id')
                  ->references('id')
                  ->on('personas')
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
        Schema::dropIfExists('ppffs');
    }
}
