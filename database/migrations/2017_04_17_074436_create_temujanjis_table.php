<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemujanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temujanjis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('aktiviti');
            $table->timestamp('masaMula');
            $table->timestamp('masaAkhir')->nullable();
            $table->string('pengesahan')->default('Dipertimbangkan')->nullable();
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
        Schema::dropIfExists('temujanjis');
    }
}
