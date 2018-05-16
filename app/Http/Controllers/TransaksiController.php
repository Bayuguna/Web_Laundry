<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Paket;
use App\DetailTransaksi;
use Carbon\Carbon;
use App\Member;
use Auth;
use DB;

class TransaksiController extends Controller
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
        $transaksi = Transaksi::with('member', 'det_transaksi')->where('status_order', '!=', 'batal')->orderBy('id', 'desc')->get();
        $paket = Paket::all();
        $member = Member::all();
        $alert = Transaksi::with('member')->where('status_order', 'order')->orderBy('id', 'desc')->get();

        return view('pegawai.transaksi', compact('transaksi', 'paket', 'member', 'alert'));
    }

    public function loadData(Request $request){
        if ($request->has('q')) {
    		$cari = $request->q;
            $data = DB::table('pakets')->select('id', 'nama_paket', 'harga')->where('id', '=', $cari)->first();
            
    		return response()->json($data);
    }
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
        $modal = Paket::find($request->paket);
        
        if($request->paket != NULL){
        $proses2->admin_id = Auth::user()->id;
        $proses->transaksi_id = $request->get('id');
        $proses->paket_id = $request->paket;
        $proses->jumlah = $request->jumlah;
        $proses->modal = ($modal->modal)*($request->jumlah);
        $proses->total_bayar = $request->total;
        $proses->tgl_proses = Carbon::now();
        $proses2->status_order = 'proses';
        $proses->status_order = 'proses';
        $proses->save();
        $proses2->save();

        // return $proses2;

            return redirect()->back()->with('success', 'Transaksi Berhasil Di Proses');
        }else{
            return redirect()->back()->with('error', 'Transaksi Gagal Di Proses');
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
        $batal = Transaksi::find($id);
    
        $batal->tgl_batal = Carbon::now();
        $batal->status_order = 'batal';
        $batal->save();

        return redirect('/transaksi');
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
