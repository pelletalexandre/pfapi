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
        Schema::create('aeroports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
$table->string('ident', 10);
$table->string('type', 30);
$table->string('name',100);
$table->double('lat');
$table->double('lng');
$table->string('elevation_ft',20);
$table->string('continent', 5)->nullable();
$table->string('iso_country',5)->nullable ();
$table->string('iso_region', 10)->nullable();
$table->string('municipalite',50)->nullable();
$table->string('scheduled_service', 5)->nullable();
$table->string('gps_code', 10)->nullable();
$table->string('iata_code',10)->nullable();
$table->string('local_code', 10)->nullable();
//$table->string('keywords', 100)->nullable();
$table->integer('nb_search')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aeroports');
    }
};
