<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mhs', function (Blueprint $table) {
            $table->bigInteger('NRP')->primary();
            $table->bigInteger('ID_JURUSAN')->nullable()->index('FK_MAHASISWA_JURUSAN');
            $table->string('NAMA_MHS', 100);
            $table->string('ALAMAT', 100);
            $table->bigInteger('NO_HP');
            $table->string('KELAS', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mhs');
    }
}
