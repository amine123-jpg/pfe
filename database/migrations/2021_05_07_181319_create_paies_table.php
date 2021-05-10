<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codeP');
            $table->integer('nombre_de_jour');
            $table->integer('prix heure');
            $table->string('regime');
            $table->integer('salaire de base');
            $table->integer('salaire net');
            $table->string('retener cnss');
            $table->integer('les heurs suplementaires');
            $table->integer('les intéréts bancaires');
            $table->integer('primes');
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
        Schema::dropIfExists('paies');
    }
}
