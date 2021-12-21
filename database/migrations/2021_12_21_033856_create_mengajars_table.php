<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengajar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')
                ->constrained('dosen')
                ->cascadeOnDelete();
            $table->foreignId('matakuliah_id')
                ->constrained('matakuliah')
                ->cascadeOnDelete();
            $table->year('tahun');
            $table->enum('semester', ['ganjil','genap']);
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
        Schema::table('mengajar', function (Blueprint $table) {
            $table->dropForeign('dosen_id');
            $table->dropColumn('dosen_id');
        });
        Schema::table('mengajar', function (Blueprint $table) {
            $table->dropForeign('matakuliah_id');
            $table->dropColumn('matakuliah_id');
        });
        Schema::dropIfExists('mengajar');
    }
}
