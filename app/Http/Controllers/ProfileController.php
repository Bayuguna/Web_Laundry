<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Transaksi;
use App\DetailTransaksi;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $id = Auth::user()->id;
        $profile = Member::find($id);
        if(!empty(Auth::user()->id)){
            $table = Transaksi::with('member', 'det_transaksi')->where(function($query){
                $id = Auth::user()->id;
                $query->where('status_order', 'diambil')
                ->where('user_id', $id);
            })
            ->get();

            // return $table;
            return view('user.profile', compact('table', 'profile'));
        }else{
            return view('user.userHome');
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
        $data = Transaksi::find($id);
        $table = DetailTransaksi::with('transaksi', 'paket')
        ->where('transaksi_id', $id)
        ->get();

        // return $data;

        return view('user.detailTransaksi', compact('table', 'data'));
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
        $update = Member::find($id);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->alamat = $request->alamat;
        $update->telp = $request->telp;
        $update->save();

        return redirect()->back()->with('success', 'Data Diri Berhasil Diperbaharui');
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
