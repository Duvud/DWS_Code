<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class HacerCorredor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredor', function(Blueprint $table){
            $table->id('numero-dorsal');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('procedencia');
            $table->string('imagen')->default('1.jpg');
            $table->string('tiempoS')->default('abandona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
