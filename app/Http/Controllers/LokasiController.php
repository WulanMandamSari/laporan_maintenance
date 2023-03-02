<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = \App\Lokasi::all();
        return view('lokasi.index',compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = \App\Lokasi::all(); 
        return view('lokasi.create',compact('lokasi')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = ([
            'required' => "Data Tidak Boleh Kosong!"
        ]);
    
        $this->validate($request,[
            'nama_lokasi' => 'required' 
        ], $message);

        Lokasi::create([ 
            'nama_lokasi' => $request->nama_lokasi 
        ]);

        return redirect()->route('lokasi')->with('Data ditambah', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lokasi = Lokasi::where('id_lokasi',$id)->first(); 
       return view('lokasi.show',compact('lokasi')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::where('id_lokasi',$id)->first();
        return view('lokasi.edit', compact('lokasi'));
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
        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
        ]);

        $this->validate($request,[
            'nama_lokasi' => 'required'
        ], $message);
        
        Lokasi::where('id_lokasi', $id)->update([
            'nama_lokasi' => $request->nama_lokasi
        ]);

        return redirect()->route('lokasi')->with('Data dihapus', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lokasi::where('id_lokasi',$id)->delete(); 
        return redirect()->route('lokasi')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
