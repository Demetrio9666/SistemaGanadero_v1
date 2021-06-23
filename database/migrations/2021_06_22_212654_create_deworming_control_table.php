<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDewormingControlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deworming_control', function (Blueprint $table) {
            $table->id();
            $table->date('date_d');
            $table-> unsignedBigInteger('animalCode');
            $table->foreign('animalCode')->references('id')->on('file_animalee');
            $table-> unsignedBigInteger('vaccine_id');
            $table->foreign('vaccine_id')->references('id')->on('vaccine');
            $table->date('date_vr');
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
        Schema::dropIfExists('deworming_control');
    }
}
