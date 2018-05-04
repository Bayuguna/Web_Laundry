<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    public function transaksi(){
        return $this->hasMany(Transaksi::class, 'admin_id');
    }
}
