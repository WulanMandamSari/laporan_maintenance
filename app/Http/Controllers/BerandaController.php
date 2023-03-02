<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Beranda;
use App\kerusakan;
use App\penyelesaian;
use App\lokasi;
use App\barang;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $beranda = \App\Beranda::all(); 
        // return view('beranda.index', compact('beranda'));

        $jumlah_kerusakan = Kerusakan::count();
        $jumlah_penyelesaian = Penyelesaian::count();
        $jumlah_lokasi = Lokasi::count();
        $jumlah_barang = Barang::count();

        return view('beranda.index')
        ->with('jumlah_kerusakan',$jumlah_kerusakan)
        ->with('jumlah_penyelesaian',$jumlah_penyelesaian)
        ->with('jumlah_lokasi',$jumlah_lokasi)
        ->with('jumlah_barang',$jumlah_barang);
    }

    // public function index_teknisi()
    // {
    //     $beranda_teknisi = \App\Beranda::all();
    //     return view('beranda.index_teknisi', compact('beranda_teknisi'));
    // } 

    // public function index_karyawan()
    // {
    //     $beranda_karyawan = \App\Beranda::all();
    //     return view('beranda.index_karyawan', compact('kerusakan_karyawan'));
    // } 

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
