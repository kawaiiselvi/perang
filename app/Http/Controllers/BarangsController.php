<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request, Builder $htmlBuilder)
    {
       $barang = Barang::all();
        return view('barangs.index',compact('barang'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = Barang::all();
        return view('barangs.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
    {
        $barang = new Barang();
        $barang->nama_barang = $request->a;
        $barang->jumlah_barang = $request->b;
        $barang->stock_barang = $request->c;
        $barang->kondisi_barang = $request->d;
        $barang->save();
        return redirect('/admin/barangs');
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
        $barang=Barang::find($id);
        return view('barangs.edit')->with(compact('barang'));
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
        $barang = Barang::findOrFail($id);
       
        $barang->jumlah_barang = $request->jumlah_barang;
        
        $barang->kondisi_barang = $request->kondisi_barang;
        $barang->save();
        return redirect('/admin/barangs');
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
        if(!Barang::destroy($id))  return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Penulis Berhasil Dihapus"]);
        return redirect()->route('barangs.index');

     }
}
