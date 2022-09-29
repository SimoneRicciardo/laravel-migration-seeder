<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza')->comment('Orario di partenza');
            $table->time('orario_arrivo')->comment('Orario di arrivo');
            $table->mediumInteger('ct')->comment('Codice Treno');
            $table->smallInteger('nc')->comment('Numero Carrozze');
            $table->boolean('in_orario')->comment('In orario');
            $table->boolean('cancellato')->comment('Cancellato');
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
}
