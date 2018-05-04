<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'det_transaksi';
    public $timestamps = false;

    public function transaksi(){
        return $this->belongsTo('App\Transaksi', 'transaksi_id');
    }

    public function paket(){
        return $this->belongsTo('App\Paket', 'paket_id');
    }
}
