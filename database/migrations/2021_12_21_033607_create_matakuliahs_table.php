<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')
                ->constrained('prodi')
                ->cascadeOnDelete();
            $table->char('alias', 5);
            $table->string('nama_matakuliah');
            $table->tinyInteger('sks')->nullable();
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
        Schema::table('matakuliah', function (Blueprint $table) {
            $table->dropForeign('prodi_id');
            $table->dropColumn('prodi_id');
        });
        Schema::dropIfExists('matakuliah');
    }
}
