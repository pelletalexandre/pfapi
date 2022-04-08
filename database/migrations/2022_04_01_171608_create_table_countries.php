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
        Schema::create('countries', function (Blueprint $table) 
        {
            $table->id();
        $table->integer ( "geonameid" );
        $table->string ( "iso", 4 )->nullable()->default('');
        $table->string ( "iso3", 4 )->nullable()->default('');
        $table->integer ( "iso_numeric" )->default(0);
        $table->string ( "fips", 5 )->nullable()->default('');
        $table->string ( "country", 55 )->nullable()->default('');
        $table->string ( "capital", 55 )->nullable()->default('');
        $table->string ( "continent", 4 )->nullable()->default('');
        $table->string ( "tld", 6 )->nullable()->default('');
        $table->string ( "currency", 5 )->nullable()->default('');
        $table->string ( "neighbours", 80 )->nullable()->default('');
        $table->integer ( "nb_search" )->default(0);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
