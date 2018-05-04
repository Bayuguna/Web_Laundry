<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

use DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Admin::all();
    
        return view('manager.dataPegawai', compact('pegawai'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahPegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string|min:8|confirmed',
        ]);
        $tambah = new Admin;

        $tambah->name = $request->name;
        $tambah->email = $request->email;
        $tambah->alamat = $request->alamat;
        $tambah->telp = $request->telp;
        $tambah->password = bcrypt($request->get('password'));
        $tambah->role = $request->role;
        $tambah->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $tambah = Admin::find($id);

        $tambah->name = $request->name;
        $tambah->email = $request->email;
        $tambah->alamat = $request->alamat;
        $tambah->telp = $request->telp;
        $tambah->role = $request->role;
        $tambah->save();

        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('admins')->where('id', $id)->delete();

        // return redirect('/pegawai');
    }
}
