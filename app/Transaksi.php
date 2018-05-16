<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    // public $timestamps = false;

    public function member(){
        return $this->belongsTo('App\Member', 'user_id');
    }

    public function admin(){
        return $this->belongsTo('App\Admin', 'admin_id');
    }

    public function det_transaksi(){
        return $this->hasMany('App\DetailTransaksi', 'transaksi_id');
    }

}
