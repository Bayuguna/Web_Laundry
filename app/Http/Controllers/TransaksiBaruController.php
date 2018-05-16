<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\DetailTransaksi;
use Carbon\Carbon;
use App\Member;
use Validator;
use App\Paket;

class TransaksiBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        
        return view('pegawai.transaksi', compact('member'));
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
        $transaksi = new Transaksi;
    
        if($request->nama_customer == NULL){
            return redirect()->back()->with('error', 'Terjadi Kesalahan Dalam Pengisisan Data');
        }else{
            $transaksi->user_id = $request->nama_customer;
            $transaksi->status_bayar = 'belum bayar';
            $transaksi->tgl_order = Carbon::now();
            $transaksi->catatan = $request->message;
            $transaksi->status_order = 'order';
            $transaksi->save();

            // return $transaksi;

            return redirect('/transaksi')->with('success', 'Transaksi Baru Telah Ditambahkan');
        }
        
        
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
        //
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
