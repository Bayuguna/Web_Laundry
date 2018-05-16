<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ProfileManagerController extends Controller
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
        $message = Message::where('status', '=', 'blm_dilihat')->orderBy('id', 'desc')->get();

        return view('manager.profileManager', compact('message'));
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
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        $profile = Admin::find($id);

        if($request->password == null){
            $profile->name = $request->name;
            $profile->email = $request->email;
            $profile->alamat = $request->alamat;
            $profile->save();

            return redirect()->back()->with('success', 'Data Diri Berhasil Diperbaharui');
            
        }else{
            if($validator->fails()){
                return redirect()->back()->with('error', 'Password Dan Data Diri Tidak Dapat Diperbaharui');
            }else{
                
                $profile->name = $request->name;
                $profile->email = $request->email;
                $profile->alamat = $request->alamat;
                $profile->password = bcrypt($request->get('password'));

                $profile->save();

                return redirect()->back()->with('success', 'Password Dan Data Diri Berhasil Diperbaharui');
            }  
        }
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
