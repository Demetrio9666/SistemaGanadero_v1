<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileAnimaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_animale', function (Blueprint $table) {
            $table->id();
            $table->string('animalCode',300);
            $table->date('fecha_nacimiento');

            $table-> unsignedBigInteger('animale_race_id');
            $table->foreign('animale_race_id')->references('id')->on('race');

            $table-> unsignedBigInteger('animale_type_id');
            $table->foreign('animale_type_id')->references('id')->on('animal_type');
            $table->string('origin',15);
            $table->string('sex',10);
            $table->string('weight',10);

            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('farm_file_area');

            $table->integer('age_month');
            $table->unsignedBigInteger('health_id');
            $table->foreign('health_id')->references('id')->on('health_condition');

            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('actual_state');

            $table->string('animalCodep',300);
            $table->string('animalCodem',300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_animale');
    }
}
