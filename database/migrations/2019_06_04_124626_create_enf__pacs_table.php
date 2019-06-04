<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfPacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enf__pacs', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('enf_startDate');
            $table->dateTime('enf_endDate');
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('enfermedad_id');
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
        Schema::dropIfExists('enf__pacs');
    }
}
