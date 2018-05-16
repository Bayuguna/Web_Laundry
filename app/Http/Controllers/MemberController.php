<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Transaksi;
use Validator;
use DB;
class MemberController extends Controller
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
        $member = Member::all();
        $alert = Transaksi::with('member')->where('status_order', 'order')->orderBy('id', 'desc')->get();

        return view('pegawai.member', compact('member', 'alert'));
    }

    public function loadData(Request $request){
        if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('users')->select('id', 'name', 'alamat', 'telp')->where('id', 'LIKE', '%' .$cari. '%')->first();
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
       $tambah = new Member;

       if($validator->fails()){
           return redirect('/member')->with('error', 'Maaf Terjadi Kesalahan Pengisian Data');
       }else{
        $tambah->name = $request->get('name');
        $tambah->email = $request->get('email');
        $tambah->alamat = $request->alamat;
        $tambah->telp = $request->telp;
        $tambah->password = bcrypt('12345678');
        $tambah->save();

            return redirect('/member')->with('success', 'Data Member Tersimpan');
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
