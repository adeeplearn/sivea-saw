<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')
                ->constrained('dosen')
                ->cascadeOnDelete();
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
        Schema::table('kritik', function (Blueprint $table) {
            $table->dropForeign('dosen_id');
            $table->dropColumn('dosen_id');
        });
        Schema::dropIfExists('kritik');
    }
}
