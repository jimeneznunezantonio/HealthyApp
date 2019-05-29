<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname1');
            $table->string('surname2');
            $table->string('nuhsa');
            $table->string('BornDate');
            $table->string('weight');
            $table->string('height');
            $table->string('dni');
            $table->string('telephone');
            $table->string('email');
            $table->string('password');
            $table->string('Address');
            $table->string('zipCode');
            $table->string('passport');
            $table->string('nationality');
            $table->string('nie');
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
        Schema::dropIfExists('pacientes');
    }
}
