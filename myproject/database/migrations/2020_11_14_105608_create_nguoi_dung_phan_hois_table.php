<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiDungPhanHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dung_phan_hois', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('noidung');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::table('nguoi_dung_phan_hois', function (Blueprint $table){
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
        Schema::dropIfExists('nguoi_dung_phan_hois');
    }
}
