<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativescoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativescores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asistensi_id');
            $table->foreign('asistensi_id')->references('id')->on('asistensis');
            $table->unsignedBigInteger('subcriteria_id');
            $table->foreign('subcriteria_id')->references('id')->on('subcriterias');
            $table->unsignedBigInteger('rating_id');
            $table->foreign('rating_id')->references('id')->on('criteriaratings');
            $table->text('pesan');
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
        Schema::dropIfExists('alternativescores');
    }
}
