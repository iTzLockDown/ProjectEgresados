<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idegresado')->unsigned();
            $table->foreign('idegresado')->references('id')->on('egresados')->onDelete('cascade');

            $table->integer('idcarrera')->unsigned();
            $table->foreign('idcarrera')->references('id')->on('carreras')->onDelete('cascade');


            $table->string('rfaltante')->nullable(false);
            $table->date('fechae')->nullable(false);


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
        Schema::dropIfExists('details');
    }
}
