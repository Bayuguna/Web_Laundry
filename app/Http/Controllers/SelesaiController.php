<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailTransaksi;
use App\Transaksi;
use Carbon\Carbon;

class SelesaiController extends Controller
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
        $selesai = DetailTransaksi::with('transaksi', 'paket')->where('status_order', 'selesai')->orderBy('id', 'desc')->get();
        $alert = Transaksi::with('member')->where('status_order', 'order')->orderBy('id', 'desc')->get();

        return view('pegawai.selesai', compact('selesai', 'alert'));
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
        $diambil = DetailTransaksi::find($id);
        $diambil2 = Transaksi::find($diambil->transaksi_id);
        
        $diambil->tgl_diambil = Carbon::now();
        $diambil->status_order = 'diambil';
        $diambil2->status_order = 'diambil';
        $diambil->save();
        $diambil2->save();

        // return $diambil;

        return redirect()->back();
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
