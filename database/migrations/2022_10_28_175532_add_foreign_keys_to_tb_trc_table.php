<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbTrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_trc', function (Blueprint $table) {
            $table->foreign(['ID_BUKU'], 'FK_RELATIONSHIP_3')->references(['ID_BUKU'])->on('bukus');
            $table->foreign(['NRP'], 'FK_MAHASISWA_MEMINJAM_BUKU')->references(['NRP'])->on('tb_mhs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_trc', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_3');
            $table->dropForeign('FK_MAHASISWA_MEMINJAM_BUKU');
        });
    }
}
