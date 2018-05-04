<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use Auth;
use Carbon\Carbon;
use App\DetailTransaksi;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(Auth::user()->id)){
            $id = Auth::user()->id;
            $table = Transaksi::join('users', 'transaksi.user_id', '=', 'users.id')
                    -> join('det_transaksi', 'transaksi.id', '=', 'det_transaksi.transaksi_id')
                    -> join('pakets', 'det_transaksi.paket_id', '=', 'pakets.id')
                    -> where('user_id', $id)
                    -> get();

            return view('user.userHome', compact('table'));
        }else{
            return view('user.userHome');
        }
        
        
        // $user = User::all();

        // return view('user.userHome', compact('user'));
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
    
        $transaksi->user_id = Auth::user()->id;
        $transaksi->status_bayar = 'belum bayar';
        $transaksi->tgl_order = Carbon::now();
        $transaksi->catatan = $request->message;
        $transaksi->status_order = 'order';
        $transaksi->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $table = DetailTransaksi::with('transaksi', 'paket')->where('user_id', $id)->get();

        // return redirect('/user', compact('table'));
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
