<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;

class PeminjamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        $peminjam = Peminjam::all();
        return view('peminjams.index',compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peminjam = Peminjam::all();
        return view('peminjams.create',compact('peminjam'));
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
        $peminjam = new Peminjam();
        $barang->nama = $request->nama;
        $barang->kelas = $request->kelas;
        $barang->nama_barang = $request->nama_barang;
        $barang->save();
        return redirect('/admin/peminjams');
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
        $peminjam=Peminjam::find($id);
        return view('peminjams.edit')->with(compact('peminjam'));
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
        // $peminjam = Peminjam::findOrFail($id);
       
        // $barang->jumlah_barang = $request->jumlah_barang;
        
        // $barang->kondisi_barang = $request->kondisi_barang;
        // $barang->save();
        // return redirect('/admin/peminjams');
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
