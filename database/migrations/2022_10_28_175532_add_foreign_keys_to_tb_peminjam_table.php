<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTbPeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_peminjam', function (Blueprint $table) {
            $table->foreign(['ID_TRC'], 'FK_RELATIONSHIP_4')->references(['ID_TRC'])->on('tb_trc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_peminjam', function (Blueprint $table) {
            $table->dropForeign('FK_RELATIONSHIP_4');
        });
    }
}
