<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengembalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengembalian', function (Blueprint $table) {
            $table->bigInteger('ID_PENGEMBALIAN')->primary();
            $table->bigInteger('ID_PEMINJAM')->nullable()->index('FK_RELATIONSHIP_5');
            $table->double('DENDA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pengembalian');
    }
}
