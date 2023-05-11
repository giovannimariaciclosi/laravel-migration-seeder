<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda')->nullable();
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->date('orario_partenza');
            $table->date('orario_arrivo');
            $table->string('codice_treno')->unique();
            $table->integer('numero_carrozze')->nullable();
            $table->boolean('in_orario')->nullable();
            $table->boolean('cancellato')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
