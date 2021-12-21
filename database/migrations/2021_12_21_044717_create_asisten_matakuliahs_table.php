<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asisten_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mengajar_id')
                ->constrained('mengajar')
                ->cascadeOnDelete();
            $table->foreignId('asisten_id')
                ->constrained('asisten')
                ->cascadeOnDelete();
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
        Schema::table('asisten_matakuliah', function (Blueprint $table) {
            $table->dropForeign('mengajar_id');
            $table->dropColumn('mengajar_id');
        });
        Schema::table('asisten_matakuliah', function (Blueprint $table) {
            $table->dropForeign('asisten_id');
            $table->dropColumn('asisten_id');
        });
        Schema::dropIfExists('asisten_matakuliah');
    }
}
