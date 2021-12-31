<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
//            $table->unsignedBigInteger('dosen_id')->after('id');
//            $table->foreign('dosen_id')->references('id')->on('dosen');
//            $table->string('email')->unique()->after('username');
            $table->enum('role',['admin','penilai'])->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
//            $table->dropForeign('dosen_id');
//            $table->dropColumn('dosen_id');
            $table->dropColumn('email');
            $table->dropColumn('role');
        });
    }
}
