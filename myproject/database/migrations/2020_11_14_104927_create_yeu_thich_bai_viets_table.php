<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeuThichBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeu_thich_bai_viets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('baiviet_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::table('yeu_thich_bai_viets', function (Blueprint $table){
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
        Schema::dropIfExists('yeu_thich_bai_viets');
    }
}
