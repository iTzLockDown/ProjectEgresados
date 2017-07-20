<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_matricula',10)->unique();
            $table->string('nombre',20)->nullable(false);
            $table->string('apellidop',20)->nullable(false);
            $table->string('apellidom',20)->nullable(false);
            $table->string('documento',20)->unique();
            $table->string('email',50)->unique();
            $table->string('telefono',12);
            $table->string('celular',9)->unique();


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
        Schema::dropIfExists('egresados');
    }
}
