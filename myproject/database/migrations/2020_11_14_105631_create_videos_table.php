<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude',150);
            $table->longText('noidung');
            $table->string('video');
            $table->unsignedInteger('chuyenmuc_id');
            $table->timestamps();
        });

        Schema::table('videos', function (Blueprint $table) {
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
        Schema::dropIfExists('videos');
    }
}
