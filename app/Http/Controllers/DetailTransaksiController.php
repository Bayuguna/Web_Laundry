<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailTransaksi;
use App\Transaksi;
use Carbon\Carbon;
use DB;

class DetailTransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('pegawai');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alert = Transaksi::with('member')->where('status_order', 'order')->orderBy('id', 'desc')->get();

        $bayar = DetailTransaksi::where('transaksi_id', $id)->sum('total_bayar');
        $get = Transaksi::find($id);
        $table = DetailTransaksi::with('transaksi', 'paket')
        ->where('transaksi_id', $id)
        ->get();

        return view('pegawai.detailTransaksi', compact('table', 'get', 'bayar', 'alert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->total > $request->bayar){
            return redirect()->back()->with('error', 'Pembayaran Gagal');
        }else{
            $bayar = Transaksi::find($id);

            $bayar->status_bayar = 'lunas';
            $bayar->save();

            return redirect()->back()->with('success', 'Pembayaran Berhasil');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $det = DetailTransaksi::find($id);
        DB::table('det_transaksi')->where('id', $id)->delete();        
        $trans = DetailTransaksi::where('transaksi_id', $det->transaksi_id)->get();

        if($trans->count('id') > 0){
            return redirect()->back();
        }else{
            return redirect('/transaksi');
        }
    }
}
