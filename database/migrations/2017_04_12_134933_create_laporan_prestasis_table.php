<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanPrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_prestasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaPelajar');
            $table->string('namaPenyelia');
            $table->string('tarikh');
            $table->string('tajukKajian');
            $table->string('kemajuan');
            $table->string('dapatan');
            $table->string('huraianAktiviti');
            $table->string('pelan');
            $table->string('komen');
            $table->string('komenPenyelia')->nullable();
            $table->string('KemajuanPelajar')->nullable();
            $table->string('pelanKajian')->nullable();
            $table->integer('user_id')->unsigned();;
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_prestasis');
    }
}
