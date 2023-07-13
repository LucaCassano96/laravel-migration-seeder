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

            $table->id();
            
            $table -> string('azienda', 32);
            $table -> string('stazione_di_partenza', 64);
            $table -> string('stazione_di_arrivo', 64);
            $table -> string('orario_di_partenza', 64);
            $table -> string('orario_di_arrivo', 64);
            $table -> string('codice_treno', 10) -> unique();
            $table -> integer('numero_carrozze');
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('cancellato') -> default(false);

            $table -> timestamps();
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


/* - azienda
- stazione di partenza
- stazione di arrivo
- orario di partenza
- orario di arrivo
- codice treno
- numero carrozze
- in orario
- cancellato */
