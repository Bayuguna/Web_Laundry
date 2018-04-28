<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CereateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->integer('admin_id')->unsigned();
            $table->enum('status_bayar', ['lunas', 'belum bayar']);
            $table->string('total_bayar');
            $table->string('catatan');
            $table->dateTime('tgl_order');
            $table->dateTime('tgl_proses');
            $table->dateTime('tgl_selesai');
            $table->enum('status_order', ['order','proses','selesai','diambil','batal']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
}
}