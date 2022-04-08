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
        Schema::create('apitokens', function (Blueprint $table) {
            $table->id();
            $table->string ('token', 100)->nullable();
            $table->integer ('valide')->default(0);
            $table->integer ('session_start')->default(0)->comment("Timestamp du début de la session");
            $table->integer ('session_expiration')->default(0)->comment("Timestamp de fin de la session");
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
        Schema::dropIfExists('apitokens');
    }
};
