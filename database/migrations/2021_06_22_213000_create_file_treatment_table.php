<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_treatment', function (Blueprint $table) {
            $table->id();
            $table->date('date_r');
            $table-> unsignedBigInteger('animalCode');
            $table->foreign('animalCode')->references('id')->on('file_animalee');
            $table->string('disease',20);
            $table-> unsignedBigInteger('antibiotic_id');
            $table->foreign('antibiotic_id')->references('id')->on('antibiotic');
            $table->string('treatment',100);
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
        Schema::dropIfExists('file_treatment');
    }
}
