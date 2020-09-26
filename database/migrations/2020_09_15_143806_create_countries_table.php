<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('tld');
            $table->string('cca2');
            $table->string('ccn3');
            $table->string('cca3');
            $table->string('cioc');
            $table->boolean('independent');
            $table->string('status');
            $table->json('currencies');
            $table->json('idd');
            $table->json('capital');
            $table->json('altSpellings');
            $table->string('region');
            $table->string('subregion');
            $table->json('languages');
            $table->json('translations');
            $table->json('latlng');
            $table->boolean('landlocked');
            $table->json('borders');
            $table->string('area');
            $table->string('flag');
            $table->json('demonyms');
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
        Schema::dropIfExists('countries');
    }
}
