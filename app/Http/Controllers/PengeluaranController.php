<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Message;
use DB;

class PengeluaranController extends Controller
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
        $pengeluaran = Transaksi::with('member', 'det_transaksi')->where('status_bayar', '=', 'lunas')->get();
        $message = Message::where('status', '=', 'blm_dilihat')->orderBy('id', 'desc')->get();

        // return $pengeluaran;
        return view('manager.pengeluaran', compact('pengeluaran','message'));
    }

    public function listPengeluaran(Request $request){
        if(isset($request->from_date, $request->to_date)){
            $list = DB::table('transaksi')
            ->select('users.name','transaksi.tgl_order',DB::raw('SUM(modal) as modal'))
            ->join('users', 'transaksi.user_id', '=', 'users.id')
            ->join('det_transaksi', 'det_transaksi.transaksi_id', '=', 'transaksi.id')
            ->whereBetween('transaksi.tgl_order', [$request->from_date, $request->to_date])
            ->where('transaksi.status_bayar', '=', 'lunas')
            ->groupBy('transaksi.tgl_order')
            ->get();
            return $list;
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
