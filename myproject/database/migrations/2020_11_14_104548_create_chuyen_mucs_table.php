<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenMucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_mucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenchuyenmuc',100);
            $table->timestamps();
        });

        Schema::table('bai_viets', function (Blueprint $table){
            $table->foreign('chuyenmuc_id')->references('id')->on('chuyen_mucs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chuyen_mucs');
    }
}
