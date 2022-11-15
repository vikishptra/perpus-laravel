<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_mhs', function (Blueprint $table) {
            $table->foreign(['ID_JURUSAN'], 'FK_MAHASISWA_JURUSAN')->references(['ID_JURUSAN'])->on('tb_jurusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_mhs', function (Blueprint $table) {
            $table->dropForeign('FK_MAHASISWA_JURUSAN');
        });
    }
}
