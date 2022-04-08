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
        Schema::table('aeroports', function (Blueprint $table) 
        {
            $table->integer ('nb_reservation')->default(0)->comment('Le nombre de demande de reservation pour cet aeroport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aeroports', function (Blueprint $table) {
            //
        });
    }
};
