<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMengajarColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asistensis', function (Blueprint $table) {
            $table->foreignId('mengajar_id')
                ->constrained('mengajar')
                ->cascadeOnDelete();
            $table->foreignId('asisten_id')
                ->constrained('asisten')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asistensis', function (Blueprint $table) {
            //
        });
    }
}
