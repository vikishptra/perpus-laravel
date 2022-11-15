<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_trc', function (Blueprint $table) {
            $table->bigInteger('ID_TRC')->primary();
            $table->bigInteger('NRP')->nullable()->index('FK_MAHASISWA_MEMINJAM_BUKU');
            $table->bigInteger('ID_BUKU')->nullable()->index('FK_RELATIONSHIP_3');
            $table->date('DATE_PINJAM');
            $table->date('DATE_PENGEMBALIAN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_trc');
    }
}
