<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Role;
use App\Message;
use Validator;
use DB;

class PegawaiManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('manager');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Admin::all();
        $role = Role::all();
        $message = Message::where('status', '=', 'blm_dilihat')->orderBy('id', 'desc')->get();
    
        return view('manager.dataPegawai', compact('pegawai', 'role', 'message'));
        
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:admins',
            'email' => 'required|string|unique:admins',
        ]);
        $tambah = new Admin;

        if($validator->fails()){
            return redirect()->back()->with('error', 'Terjadi Kesalahan Dalam Pengisisan Data');
        }
        $tambah->name = $request->get('name');
        $tambah->email = $request->get('email');
        $tambah->alamat = $request->alamat;
        $tambah->telp = $request->telp;
        $tambah->password = bcrypt('12345678');
        $tambah->role_id = $request->role;
        $tambah->save();
        return redirect()->back()->with('success', 'Data Pegawai Baru Tersimpan');
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
        $tambah->role_id = $request->role;
        $tambah->save();

        return redirect('/pegawaiM')->with('success', 'Data Pegawai Diperbaharui');
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
