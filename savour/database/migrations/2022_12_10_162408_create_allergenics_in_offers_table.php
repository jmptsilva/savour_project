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
        Schema::create('allergenics_in_offers', function (Blueprint $table) {
            $table->unsignedBigInteger('allergenic_id');
            $table->unsignedBigInteger('offer_id');
            $table->timestamps();

            $table->foreign('allergenic_id')->references('id')->on('allergenics');
            $table->foreign('offer_id')->references('id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergenics_in_offers');
    }
};
