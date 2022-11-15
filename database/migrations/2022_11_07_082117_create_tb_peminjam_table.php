<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjam', function (Blueprint $table) {
            $table->bigInteger('ID_PEMINJAM')->primary();
            $table->bigInteger('ID_TRC')->nullable()->index('FK_RELATIONSHIP_4');
            $table->string('STATUS_PMJ', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peminjam');
    }
}
