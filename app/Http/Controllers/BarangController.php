<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Lokasi;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = \App\Lokasi::all();
        $barang = \App\Barang::all();
        return view('barang.index',compact('barang','lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();//
        // echo "<pre>"; print_r($lokasi); exit;//
        $barang = \App\Barang::all(); 

        $kodeotomatis = DB::table('barang')->select(DB::raw('MAX(RIGHT(kd_barang,4)) as kode'));
        $kd = "";
        if($kodeotomatis->count()>0) {
            foreach ($kodeotomatis->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('barang.create',compact('barang','lokasi','kd')); 
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
            'required' => "Data Tidak Boleh Kosong!",
            
        ]);
        $this->validate($request,[
            // 'id_barang' => 'required',
            'id_lokasi' => 'required', 
            'kd_barang' => 'required',
            'nama_barang' => 'required',
            'stock' => 'required'
        ], $message);

        Barang::create([ 
            // 'id_barang' => $request->id,
            'id_lokasi' => $request->id_lokasi, 
            'kd_barang' => $request->kd_barang, 
            'nama_barang' => $request->nama_barang, 
            'stock' => $request->stock
        ]);

        return redirect()->route('barang')->with('Data ditambah', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::where('id_barang',$id)->first(); 
       return view('barang.show',compact('barang')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = \App\Lokasi::all();
        $barang = Barang::where('id_barang',$id)->first();
        return view('barang.edit', compact('barang','lokasi'));
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
            'id_lokasi' => 'required',
            'kd_barang' => 'required', 
            'nama_barang' => 'required',
            'stock' => 'required'
        ], $message);
        
        Barang::where('id_barang', $id)->update([
            'id_lokasi' => $request->id_lokasi,
            'kd_barang' => $request->kd_barang, 
            'nama_barang' => $request->nama_barang,
            'stock' => $request->stock
        ]);

        return redirect()->route('barang')->with('Data diedit', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id_barang',$id)->delete(); 
        return redirect()->route('barang')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
