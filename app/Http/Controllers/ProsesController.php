<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\DetailTransaksi;
use Carbon\Carbon;
use DB;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $proses = Transaksi::join('users', 'users.id', '=', 'transaksi.user_id')
        // ->join('admins', 'admins.id', '=', 'transaksi.admin_id')
        // ->join('det_transaksi', 'det_transaksi.transaksi_id', '=', 'transaksi.id')
        // ->join('pakets', 'pakets.id', '=', 'det_transaksi.paket_id')
        // ->get();
        $proses = DetailTransaksi::with('transaksi', 'paket')->where('status_order', 'proses')->get();

        return view('admin.proses', compact('proses'));
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
        $selesai2 = Transaksi::find($id);
        $selesai = DetailTransaksi::find($id);
    
        $selesai->tgl_selesai = Carbon::now();
        $selesai->status_order = 'selesai';
        $selesai2->status_order = 'selesai';
        $selesai->save();
        $selesai2->save();

        // return $selesai;

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
        DB::table('transaksi')->where('id', $id)->delete();
        return redirect('/order');
    }
}
