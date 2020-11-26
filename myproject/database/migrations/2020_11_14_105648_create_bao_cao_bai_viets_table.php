<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaoCaoBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bao_cao_bai_viets', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('noidung');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('baiviet_id');
            $table->timestamps();
        });

        Schema::table('bao_cao_bai_viets', function (Blueprint $table){
            $table->foreign('baiviet_id')->references('id')->on('bai_viets');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bao_cao_bai_viets');
    }
}
