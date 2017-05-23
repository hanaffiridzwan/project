<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorangPenyeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borang_penyelians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('noMatrik');
            $table->string('kategoriPelajar');
            $table->string('program');
            $table->string('namaPenyelia');
            $table->string('laporanPerjumpaan');
            $table->string('tarikhPerjumpaan');
            $table->string('perjalananObjektif');
            $table->string('objektif');
            $table->string('tarikhPerjumpaanSeterusnya');
            $table->string('pengesahan')->default('Disahkan')->nullable();
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
        Schema::dropIfExists('borang_penyelians');
    }
}
