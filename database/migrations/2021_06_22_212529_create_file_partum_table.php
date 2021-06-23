<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilePartumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_partum', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('animalCode');
            $table->foreign('animalCode')->references('id')->on('file_animalee');
            $table->date('date');
            $table->integer('male');
            $table->integer('female');
            $table->integer('dead');
            $table->string('mother_status',10);
            $table->string('partum_type',10);
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
        Schema::dropIfExists('file_partum');
    }
}
