<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSunoitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunoitas', function (Blueprint $table) {
            $table->id('id_archivo')->unique();

            $table->string('tipo_norma');
            $table->string('numero');
            $table->string('denominacion');
            $table->string('fecha_pub');
            $table->string('fecha_mod');
            $table->string('nombre_archivo');
            $table->string('link');

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('seccion_id')->references('id')->on('seccions')->onDelete('cascade');

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
        Schema::dropIfExists('sunoitas');
    }
}
