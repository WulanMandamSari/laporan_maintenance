<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Lokasi;
use App\Barang;
use App\Kerusakan;
use Illuminate\Support\Facades\DB;
class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = \App\Pengaduan::all(); 
        return view('pengaduan.index', compact('pengaduan'));
    }

    public function index_admin()
    {
        $lokasi = \App\Lokasi::all();
        $barang = \App\Barang::all();
        $pengaduan_admin = \App\Pengaduan::all();
        return view('pengaduan.index_admin', compact('pengaduan_admin','lokasi','barang'));
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = \App\Pengaduan::all(); 
        $lokasi = Lokasi::all();//
        // echo "<pre>"; print_r($lokasi); exit;//

        $barang = Barang::all();//
        // echo "<pre>"; print_r($penyelesaian); exit;//
        return view('pengaduan.create',compact('pengaduan','lokasi','barang')); 
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
            'unique' => "No Telepon Sudah Terdata"
        ]);

        $this->validate($request,[
            // 'id_pengaduan' => 'required', 
            'nama_pelapor' => 'required',
            'no_telepon' => 'required|unique:penyelesaian,no_telepon',
            'id_barang' => 'required', 
            'tanggal' => 'required',
            'waktu' => 'required',
            'id_lokasi' => 'required', 
            'kd_barang' => 'required', 
            'jenis_kerusakan' => 'required',
            'keterangan' => 'required', 
            'upload_foto' => 'required', 
        ], $message);

        $nm = $request->upload_foto;
        $item = time().rand(100,999).".".$nm->getClientOriginalName();

        $data = new Pengaduan;
        // $data->id_pengaduan = $request->id_pengaduan;
        $data->nama_pelapor = $request->nama_pelapor;
        $data->no_telepon = $request->no_telepon;
        $data->id_barang = $request->id_barang;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu; 
        $data->id_lokasi = $request->id_lokasi; 
        $data->kd_barang = $request->kd_barang; 
        $data->jenis_kerusakan = $request->jenis_kerusakan;
        $data->keterangan = $request->keterangan;
        $data->upload_foto = $item;

        $nm->move(public_path().'/Gambar',$item);

        $data->save();

        $datak = new Kerusakan;
        // $data->id_pengaduan = $request->id_pengaduan;
        $datak->nama_pelapor = $request->nama_pelapor;
        $datak->no_telepon = $request->no_telepon;
        $datak->id_barang = $request->id_barang;
        $datak->tanggal = $request->tanggal;
        $datak->waktu = $request->waktu; 
        $datak->id_lokasi = $request->id_lokasi; 
        $datak->kd_barang = $request->kd_barang; 
        $datak->jenis_kerusakan = $request->jenis_kerusakan;
        $datak->keterangan = $request->keterangan;
        $datak->upload_foto = $item;
        $datak->save();
        return redirect()->route('pengaduan')->with('Data ditambah','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first(); 
        $lokasi = \App\Lokasi::all();
        $barang = \App\Barang::all();
        return view('pengaduan.show',compact('pengaduan','lokasi','barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::all();
        $lokasi = Lokasi::all();
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first(); 

        $kodeotomatis = DB::table('pengaduan')->select(DB::raw('MAX(RIGHT(kd_barang,4)) as kode'));
        $kd = "";
        if($kodeotomatis->count()>0) {
            foreach ($kodeotomatis->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('pengaduan.edit', compact('pengaduan','kd','barang','lokasi'));
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
        $pengaduan = Pengaduan::where('id_pengaduan',$id)->first();
        
        if($request->file != ''){
            $path = public_path().'/Gambar/';

        //upload new file
        $file = $request->file;
        $filename = $file->getClientOriginalName();
        $file->move($path, $filename);

        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
        ]);

        $this->validate($request,[
            // 'id_pengaduan' => 'required',
            'nama_pelapor' => 'required', 
            'no_telepon' => 'no_telepon', 
            'id_barang' => 'id_barang', 
            'tanggal' => 'required',
            'waktu' => 'required', 
            'id_lokasi' => 'required',
            'kd_barang' => 'required', 
            'jenis_kerusakan' => 'required',
            'keterangan' => 'required',
            'upload_foto' => '$filename', 
        ], $message);

        Pengaduan::where('id_pengaduan', $id)->update([
            // 'id_pengaduan' => $request->id_pengaduan, 
            'nama_pelapor' => $request->nama_pelapor,
            'no_telepon' => $request->no_telepon,
            'id_barang' => $request->id_barang,
            'tanggal' => $request->tanggal, 
            'waktu' => $request->waktu,
            'id_lokasi' => $request->id_lokasi, 
            'kd_barang' => $request->kd_barang, 
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'keterangan' => $request->keterangan, 
            'upload_foto' => $filename,
        ]);
    }else{
        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
        ]);

        $this->validate($request,[
            // 'id_pengaduan' => 'required',
            'nama_pelapor' => 'required', 
            'no_telepon' => 'required', 
            'id_barang' => 'required', 
            'tanggal' => 'required',
            'waktu' => 'required', 
            'id_lokasi' => 'required',
            'kd_barang' => 'required', 
            'jenis_kerusakan' => 'required',
            'keterangan' => 'required', 
            // 'upload_foto' => 'required', 
        ], $message);

        Pengaduan::where('id_pengaduan', $id)->update([
            // 'id_pengaduan' => $request->id_pengaduan, 
            'nama_pelapor' => $request->nama_pelapor,
            'no_telepon' => $request->no_telepon,
            'id_barang' => $request->id_barang,
            'tanggal' => $request->tanggal, 
            'waktu' => $request->waktu,
            'id_lokasi' => $request->id_lokasi, 
            'kd_barang' => $request->kd_barang, 
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'keterangan' => $request->keterangan, 
            // 'upload_foto' => $filename,
        ]);
    }

    return redirect('/pengaduan')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete(); 
        return redirect()->route('pengaduan')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
