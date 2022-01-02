<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcriterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('criteria_id');
            $table->foreign('criteria_id')->references('id')->on('criteriaweights');
//            $table->foreignId('kriteria_id')
//                ->constrained('kriteria')
//                ->cascadeOnDelete();
//            $table->foreignId('criteria_weight_id')
//                ->constrained('criteriaweights')
//                ->cascadeOnDelete();
            $table->text('poin_penilaian');
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
        Schema::table('subcriterias', function (Blueprint $table) {
            $table->dropForeign('criteria_id');
            $table->dropColumn('criteria_id');
        });
        Schema::dropIfExists('subcriterias');
    }
}
