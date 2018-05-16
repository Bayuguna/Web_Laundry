<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use Validator;
use App\Transaksi;
use DB;

class PaketController extends Controller
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
        $paket = Paket::all();
        $alert = Transaksi::with('member')->where('status_order', 'order')->orderBy('id', 'desc')->get();

        return view('pegawai.paket', compact('paket', 'alert'));
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
        $validator = Validator::make($request->all() ,[
            'nama_paket' => 'required|string|unique:pakets',
        ]);

        $paket = new Paket;
        
        if($validator->fails()){
            return redirect('/paket')->with('error', 'Paket Sudah Ada');
        }else{
        $paket->nama_paket = $request->get('nama_paket');
        $paket->harga = $request->harga_paket;
        $paket->modal = $request->modal_paket;
        $paket->save();

        return redirect('/paket')->with('success', 'Paket Tersimpan');
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
        $paket = Paket::find($id);

        $paket->nama_paket = $request->nama_paket;
        $paket->harga = $request->harga_paket;
        $paket->modal = $request->modal_paket;
        $paket->save();

        return redirect('/paket')->with('success', 'Paket Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('pakets')->where('id', $id)->delete();

        // return redirect('/paket');
    }
}
