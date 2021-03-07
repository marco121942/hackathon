<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 10);
            $table->string('nombre', 150)->nullable();
            $table->string('primer_apellido', 150)->nullable();
            $table->string('segundo_apellido', 150)->nullable();
            $table->integer('cui')->nullable();
            $table->boolean('fig_acepto')->nullable();
            $table->string('cod_qr', 300)->nullable();
            $table->datetime('fecha_reg')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
