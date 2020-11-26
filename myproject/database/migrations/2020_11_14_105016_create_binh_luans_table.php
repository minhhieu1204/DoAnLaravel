<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBinhLuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('noidungbinhluan');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('baiviet_id');
            $table->timestamps();
        });

        Schema::table('binh_luans', function (Blueprint $table){
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
        Schema::dropIfExists('binh_luans');
    }
}
