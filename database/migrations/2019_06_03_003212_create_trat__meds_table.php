<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratMedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trat__meds', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('startMedDate');
            $table->dateTime('endMedDate');
            $table->string('dose');
            $table->unsignedInteger('tratamiento_id');
            $table->unsignedInteger('medicamento_id');
            $table->timestamps();


            $table->foreign('tratamiento_id')->references('id')->on('tratamientos')->onDelete('cascade');
            $table->foreign('medicamento_id')->references('id')->on('medicamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trat__meds');
    }
}
