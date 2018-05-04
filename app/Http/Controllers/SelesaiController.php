<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailTransaksi;
use App\Transaksi;
use Carbon\Carbon;

class SelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selesai = DetailTransaksi::with('transaksi', 'paket')->where('status_order', 'selesai')->get();

        return view('admin.selesai', compact('selesai'));
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
        // $transaksi2 = Transaksi::find($request->id);
        // $transkasi = DetailTransaksi::find($request->id);
    
        // $transaksi->tgl_diambil = Carbon::now();
        // $transaksi->status_order = 'diambil';
        // $transaksi2->status_order = 'diambil';
        // $transaksi->save();

        // return redirect('/selesai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $transaksi2 = Transaksi::find($id);
        $transaksi = DetailTransaksi::find($id);
    
        $transaksi->tgl_diambil = Carbon::now();
        $transaksi->status_order = 'diambil';
        $transaksi2->status_order = 'diambil';
        $transaksi->save();
        $transaksi2->save();

        // return $transaksi;

        return redirect('/selesai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
