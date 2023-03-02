<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penyelesaian;
use App\Kerusakan;
use App\Barang;
use Illuminate\Support\Facades\DB;

class PenyelesaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $penyelesaian = \App\Penyelesaian::all(); 
         return view('penyelesaian.index',compact('penyelesaian'));
    }

    public function index_teknisi()
    {   
        $penyelesaian_teknisi = \App\Penyelesaian::all(); 
         return view('penyelesaian.index_teknisi',compact('penyelesaian_teknisi'));
    }

    public function cetakpenyelesaian()
    {   
        $cetakpenyelesaian = \App\Penyelesaian::get();
        return view('Penyelesaian.cetak-penyelesaian',compact('cetakpenyelesaian'));
    }

    public function fetchname(Request $request)
    {
        /* $data['kerusakans'] = Kerusakan::where("id", $request->id)
                                         ->get(['']); */
        $id =  $request->id;
        $data = DB::table('barang as b')
        ->select('b.nama_barang', 'b.id_barang', 'k.id_kerusakan', 'k.id_barang', 'k.id_lokasi')
        ->join('kerusakan as k', 'k.id_barang', '=', 'b.id_barang')
        ->where('k.id_kerusakan', '=', $id)
        ->get();
        
        return response()->json($data);

        /* DB::table('barang')
        ->join('kerusakan', function($join)
        {
            $join->on('kerusakan.barang_id', '=', 'barang.id')
                ->where('kerusakan.id', '=', 33);
        })
        ->get(); */

       // dd($data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyelesaian = \App\Penyelesaian::all();//
    
        $barang = Barang::all();//
        // echo "<pre>"; print_r($barang); exit;
        $kerusakan = Kerusakan::all();//
        // echo "<pre>"; print_r($kerusakan); exit;
        return view('penyelesaian.create',compact('penyelesaian','barang','kerusakan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
            'unique' => "ID Sudah Terdata"
        ]);

        $this->validate($request,[
            'id_kerusakan' => 'required|unique:penyelesaian,id_kerusakan',
            'nama_barang' => 'required',
            'nama_teknisi' => 'required', 
            'no_telepon' => 'required',
            'tanggal' => 'required',
            'lama_pengerjaan' => 'required', 
            'solusi' => 'required', 
        ], $message);

        Penyelesaian::create([
            'id_kerusakan' => $request->id_kerusakan, 
            'nama_barang' => $request->nama_barang,
            'nama_teknisi' => $request->nama_teknisi, 
            'no_telepon' => $request->no_telepon,
            'tanggal' => $request->tanggal,
            'lama_pengerjaan' => $request->lama_pengerjaan, 
            'solusi' => $request->solusi
        ]);

        return redirect()->route('penyelesaian')->with('Data ditambah','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penyelesaian = Penyelesaian::where('id_penyelesaian',$id)->first(); 
        return view('penyelesaian.show',compact('penyelesaian')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = \App\Barang::all();
        $penyelesaian = Penyelesaian::where('id_penyelesaian',$id)->first(); 
        return view('penyelesaian.edit',compact('penyelesaian','barang'));
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
        // dd($request);
        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
        ]);

        $this->validate($request,[
            // 'id_penyelesaian' => 'required',
            'id_kerusakan' => 'required',
            'nama_barang' => 'required', 
            'nama_teknisi' => 'required', 
            'no_telepon' => 'required',
            'tanggal' => 'required',
            'lama_pengerjaan' => 'required', 
            'solusi' => 'required', 
        ], $message);

        Penyelesaian::where('id_penyelesaian', $id)->update([
            // 'id_penyelesaian' => $request->id_penyelesaian,
            'id_kerusakan' => $request->id_kerusakan, 
            'nama_barang' => $request->nama_barang,
            'nama_teknisi' => $request->nama_teknisi, 
            'no_telepon' => $request->no_telepon,
            'tanggal' => $request->tanggal,
            'lama_pengerjaan' => $request->lama_pengerjaan, 
            'solusi' => $request->solusi
            // $request->all()
        ]); 
 
        return redirect()->route('penyelesaian')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penyelesaian::where('id_penyelesaian',$id)->delete(); 
        return redirect()->route('penyelesaian')->with('Data dihapus','Data berhasil dihapus');
    }

    public function cetakpenyelesaianpertanggal()
    {
        return view('penyelesaian.cetak-penyelesaian-pertanggal');
    }

    public function cetakpertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakpertanggal = Penyelesaian::whereBetween('tanggal',[$tglawal, $tglakhir])->get();
        return view('penyelesaian.cetak-penyelesaian-tanggal', compact('cetakpertanggal'));
    }
}
