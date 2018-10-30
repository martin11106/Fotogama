<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fotografia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('fotografia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reporte_id');
            $table->string('camara');            
            $table->string('ruta');        
            $table->string('descripcion');            
            $table->integer('editorial_id');
            $table->integer('fotografo_id');
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
        //
    }
}
