<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // user,cod_incidencia,aula,fecha,hora,estado
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->Biginteger('user')->unsigned();
            $table->string('cod_incidencia');
            $table->string('aula');
            $table->date('fecha');
            $table->time('hora');
            $table->string('estado')->default('recibida');
            $table->string('comentario')->default(null);
            $table->timestamps();
        });
        Schema::table('incidencias',function(Blueprint $table){
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('cod_incidencia')->references('cod_incidencia')->on('cod_incidencias');
            $table->foreign('aula')->references('nombre')->on('aulas');
            $table->foreign('estado')->references('cod_estado')->on('estado_incidencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
