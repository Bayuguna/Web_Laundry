<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'users';

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'user_id');
    }
    
}
