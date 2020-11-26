<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude',100);
            $table->string('mota',200);
            $table->longText('noidung');
            $table->string('hinhanh',100);
            $table->dateTime('thoigian');
            $table->integer('luotlike')->default(0);
            $table->boolean('daxoa')->default(false);
            $table->boolean('trangthai')->default(false);
            $table->unsignedInteger('chuyenmuc_id');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_viets');
    }
}
