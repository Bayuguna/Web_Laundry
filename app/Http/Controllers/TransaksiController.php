<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    public function index(){
        $trans = Transaksi::all();

        // $trans = Transaksi::where('status_bayar', 'belum_bayar')->get();
        return view('admin.adminHome', compact('trans'));
    }
}
