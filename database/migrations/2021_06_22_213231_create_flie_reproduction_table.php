<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlieReproductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flie_reproduction', function (Blueprint $table) {
            $table->id();
            $table->date('date_r');
            $table-> unsignedBigInteger('animalCode');
            $table->foreign('animalCode')->references('id')->on('file_animalee');
            $table-> unsignedBigInteger('artificial_id');
            $table->foreign('artificial_id')->references('id')->on('ride_a');
            $table-> unsignedBigInteger('ride_n_id');
            $table->foreign('ride_n_id')->references('id')->on('ride_n');
            $table-> unsignedBigInteger('ride_a_id');
            $table->foreign('ride_a_id')->references('id')->on('ride_a');
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
        Schema::dropIfExists('flie_reproduction');
    }
}
