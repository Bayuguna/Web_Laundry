<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_transaksi', function(Blueprint $table){
            $table->increments('id');
            $table->integer('transaksi_id')->unsigned();
            $table->integer('paket_id')->unsigned();
            $table->integer('jumlah');
            $table->integer('modal');
            $table->integer('harga');
            $table->integer('total_bayar');
            $table->dateTime('tgl_proses');
            $table->dateTime('tgl_selesai');
            $table->dateTime('tgl_diambil');
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
        Schema::dropIfExists('det_transaksi');
    }
}
