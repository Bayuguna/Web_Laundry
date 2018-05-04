<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table= 'pakets';
    public $timestamps = false;

    public function det_transaksi(){
        return $this->hasOne('App\DetailTransaksi', 'paket_id');
    }
}
