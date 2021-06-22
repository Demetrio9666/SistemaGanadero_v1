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
            $table->date('datePartum');
            $table->string('idanimalCode');
            $table->integer('male');
            $table->integer('female');
            $table->integer('dead');
            $table->string('statu_mother');
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
