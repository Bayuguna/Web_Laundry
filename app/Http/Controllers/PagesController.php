<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin(){
        return  view('login.login_admin');
    }

    public function user(){
        return  view('login.login_user');
    }

    public function register(){
        return view('login.register');
    }

    public function homeAdmin(){
        return view('admin.adminHome');
    }

    public function order(){
        return view('admin.order');
    }

    public function proses(){
        return view('admin.proses');
    }

    public function selesai(){
        return view('admin.selesai');
    }

    public function batal(){
        return view('admin.batal');
    }

    public function dataTransaksi(){
        return view('admin.dataTransaksi');
    }

    public function member(){
        return view('admin.member');
    }

    public function manager(){
        return view('manager.managerHome');
    }

    public function pegawaiM(){
        return view('manager.dataPegawai');
    }

    public function memberM(){
        return view('manager.dataMember');
    }

    public function orderA(){
        return view('admin.orderAdmin');
    }
}
