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
            $table->string('Azienda', 100);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->tinyInteger('Orario di partenza');
            $table->tinyInteger('Orario di arrivo');
            $table->tinyInteger('Orario di partenza');
            $table->tinyInteger('codice treno');
            $table->tinyInteger('Numero carrozze');
            $table->tinyInteger('In_orario')->unsigned()->default(1);
            $table->tinyInteger('Cancellato')->unsigned()->default(1);

            


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
