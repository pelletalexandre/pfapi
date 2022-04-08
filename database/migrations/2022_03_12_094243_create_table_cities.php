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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();

$table->integer('geonameid');
$table->string('name', 200)->nullable();
$table->string('asciiname', 200)->nullable();
$table->text('alternatenames');

$table->double('latitude')->default(0);
$table->double('longitude')->default(0);
$table->string('feature_class', 1);
$table->string('feature_code', 10);
$table->string('country_code', 3);
$table->string('cc2', 200)->nullable();
$table->string('admin1_code', 20)->nullable();
$table->string('admin2_code', 80)->nullable();
$table->string('admin3_code', 20)->nullable();
$table->string('admin4_code', 20)->nullable();
$table->bigInteger('population')->default(0);
$table->integer('elevation')->defalut(0);
$table->integer('dem')->default(0);
$table->string('timezone', 40)->nullable();

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
        Schema::dropIfExists('cities');
    }
};
