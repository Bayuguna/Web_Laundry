<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Paket;
use App\DetailTransaksi;
use Carbon\Carbon;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Transaksi::with('member')->where('status_order', 'order')->get();
        $paket = Paket::all();

        return view('admin.order', compact('order', 'paket'));
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
        $proses2 = Transaksi::find($request->id);
        $proses = new DetailTransaksi;
        
        $proses->transaksi_id = $request->id;
        $proses->paket_id = $request->paket;
        $proses->jumlah = $request->jumlah;
        $proses->tgl_proses = Carbon::now();
        $proses->total_bayar = $request->total;
        $proses2->status_order = 'proses';
        $proses->status_order = 'proses';
        $proses->save();
        $proses2->save();

        // return $proses2;

        return redirect('/proses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $harga = Paket::where('id', $id)->get();

        return view('admin.order', compact('harga'));
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
        $batal = Transaksi::find($id);
    
        $batal->tgl_batal = Carbon::now();
        $batal->status_order = 'batal';
        $batal->save();

        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('transaksi')->where('id', $id)->delete();
        
        return redirect('/proses');
    }
}
