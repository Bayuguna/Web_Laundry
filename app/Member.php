<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'member_id');
    }
    
}
