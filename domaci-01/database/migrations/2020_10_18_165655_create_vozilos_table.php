<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVozilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vozilos', function (Blueprint $table) {
            $table->id();
            $table->string('proizvodjac');
            $table->string('model');
            $table->integer('godina_proizvodnje');
            $table->string('registarske_oznake')->nullable();
            $table->integer('broj_vrata');
            $table->string('boja');
            $table->string('tip_goriva');
            $table->float('zapremina_motora')->nullable();
            $table->float('snaga_motora')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vozilos');
    }
}
