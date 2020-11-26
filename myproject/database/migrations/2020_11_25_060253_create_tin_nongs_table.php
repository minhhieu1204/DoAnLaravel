<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinNongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_nongs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('baiviet_id');
            $table->timestamps();
        });
        Schema::table('tin_nongs', function (Blueprint $table){
            $table->foreign('baiviet_id')->references('id')->on('bai_viets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tin_nongs');
    }
}
