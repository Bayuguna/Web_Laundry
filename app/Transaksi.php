<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    public $timestamps = false;

    public function member(){
        return $this->belongsTo('App\Member', 'member_id');
    }

}
