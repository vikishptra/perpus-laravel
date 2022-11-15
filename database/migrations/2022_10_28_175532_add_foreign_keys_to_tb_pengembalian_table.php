<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbPengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_pengembalian', function (Blueprint $table) {
            $table->foreign(['ID_PEMINJAM'], 'FK_RELATIONSHIP_5')->references(['ID_PEMINJAM'])->on('tb_peminjam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_pengembalian', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_5');
        });
    }
}
