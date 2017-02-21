<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComercios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->boolean('disponible');
            $table->string('latitude',255);
            $table->string('longitude',255);
            $table->string('horario',255);
            $table->integer('usuario_id')->unsigned();
            $table->integer('tipoComercio_id')->unsigned();
            
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipoComercio_id')->references('id')->on('tiposComercio')->onDelete('cascade');

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
        Schema::dropIfExists('comercios');
    }
}
