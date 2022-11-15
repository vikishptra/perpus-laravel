<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigInteger('ID_BUKU')->primary();
            $table->string('NAMA_BUKU', 2000)->nullable();
            $table->string('NAMA_PENERBIT', 200)->nullable();
            $table->string('TAHUN_TERBIT', 20)->nullable();
            $table->string('JUMLAH_BUKU', 100)->nullable();
            $table->timestamp('updated')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
