<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerusakan;
use App\Lokasi;
use App\Barang;
use App\Penyelesaian;
use Illuminate\Support\Facades\DB;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = \App\Lokasi::all();
        $kerusakan = \App\Kerusakan::all();
        return view('kerusakan.index', compact('kerusakan','lokasi'));
    } 

    public function index_teknisi()
    {
        $lokasi = \App\Lokasi::all();
        $kerusakan_teknisi = \App\Kerusakan::all();
        return view('kerusakan.index_teknisi', compact('kerusakan_teknisi','lokasi'));
    } 

    public function cetakkerusakan()
    {
        $cetakkerusakan = \App\Kerusakan::get();
        return view('Kerusakan.cetak-kerusakan',compact('cetakkerusakan'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kerusakan = \App\Kerusakan::all();//
    
        $lokasi = Lokasi::all();//
        // echo "<pre>"; print_r($lokasi); exit;//

        $barang = Barang::all();//
        // echo "<pre>"; print_r($penyelesaian); exit;//

        $kodeotomatis = DB::table('kerusakan')->select(DB::raw('MAX(RIGHT(kd_barang,4)) as kode'));
        $kd = "";
        if($kodeotomatis->count()>0) {
            foreach ($kodeotomatis->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('kerusakan.create',compact('kerusakan','lokasi','barang','kd')); 
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
            'required' => "Data Tidak Boleh Kosong!"
        ]);

        $this->validate($request,[
            'id_kerusakan' => 'required',
            // 'nama_pelapor' => 'required',
            // 'no_telepon' => 'required',
            'id_barang' => 'required', 
            'tanggal' => 'required',
            'waktu' => 'required', 
            'id_lokasi' => 'required', 
            'kd_barang' => 'required',
            'jenis_kerusakan' => 'required',
            // 'keterangan' => 'required',
            // 'upload_foto' => 'required', 
        ], $message);


        $nm = $request->upload_foto;
        $item = time().rand(100,999).".".$nm->getClientOriginalName();

        $data = new Kerusakan;
        //$data->id = $request->id;
        $data->id_kerusakan = $request->id_kerusakan;
        // $data->nama_pelapor = $request->nama_pelapor;
        // $data->no_telepon = $request->no_telepon;
        $data->id_barang = $request->id_barang;
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->id_lokasi = $request->id_lokasi;
        $data->kd_barang = $request->kd_barang;
        $data->jenis_kerusakan = $request->jenis_kerusakan;
        // $data->keterangan = $request->keterangan;
        // $data->upload_foto = $item;

        $nm->move(public_path().'/Gambar',$item);

        $data->save();

        // $kerusakan = Kerusakan::create($request->all()); 
        // if($request->hasFile('upload_foto')) {
        //     $request->file('upload_foto')->move('Gambar/', $request->file('upload_foto')->getClientOriginalName()); 
        //     $kerusakan->upload_foto = $request->file('upload_foto')->getClientOriginalName();
        //     $kerusakan->save();
        // }

        return redirect()->route('kerusakan')->with('Data ditambah','Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* $kerusakan = DB::table('kerusakan')
        ->leftjoin('lokasi', 'lokasi.id_lokasi', '=', 'kerusakan.lokasi_id')
        ->leftjoin('barang', 'barang.id_barang', '=', 'kerusakan.id_barang')
        ->where('kerusakan.id_kerusakan',$id)
        ->get();
        */
        $kerusakan = Kerusakan::where('id_kerusakan',$id)->first(); 
        return view('kerusakan.show',compact('kerusakan')); 
    }

    public function show_teknisi($id)
    {
        $kerusakan = Kerusakan::where('id_kerusakan',$id)->first(); 
        return view('kerusakan.show_teknisi',compact('kerusakan')); 
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
        $barang = \App\Barang::all();
        $kerusakan = Kerusakan::where('id_kerusakan',$id)->first(); 

        $kodeotomatis = DB::table('kerusakan')->select(DB::raw('MAX(RIGHT(kd_barang,4)) as kode'));
        $kd = "";
        if($kodeotomatis->count()>0) {
            foreach ($kodeotomatis->get() as $k) {
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }

        return view('kerusakan.edit', compact('kerusakan','lokasi','barang','kd'));
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
        $kerusakan = Kerusakan::where('id_kerusakan',$id)->first();
        
        if($request->file != ''){
            $path = public_path().'/Gambar/';
           
            //code for remove old file
            /* if($kerusakan->upload_foto != ''  && $kerusakan->upload_foto != null){
                $file_old = public_path().'/Gambar/'.$kerusakan->upload_foto;
                unlink($file_old);
            } */

            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            $message = ([
                'required' => "Data Tidak Boleh Kosong!",
            ]);
    
            $this->validate($request,[
                'id_kerusakan' => 'required',
                // 'nama_pelapor' => 'required',
                // 'no_telepon' => 'required', 
                'id_barang' => 'required',
                'tanggal' => 'required',
                'waktu' => 'required', 
                'id_lokasi' => 'required',
                'kd_barang' => 'required',
                'jenis_kerusakan' => 'required',
                // 'keterangan' => 'required',
                // 'upload_foto' => '$filename', 
            ], $message);

            Kerusakan::where('id_kerusakan', $id)->update([
                // 'nama_pelapor' => $request->nama_pelapor,
                // 'no_telepon' => $request->no_telepon,
                'id_barang' => $request->id_barang,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'id_lokasi' => $request->id_lokasi, 
                'kd_barang' => $request->kd_barang,
                'jenis_kerusakan' => $request->jenis_kerusakan, 
                // 'keterangan' => $request->keterangan,
                // 'upload_foto' => $filename,
            ]);
        }else{
            $message = ([
                'required' => "Data Tidak Boleh Kosong!",
            ]);
    
            $this->validate($request,[
                'id_kerusakan' => 'required',
                // 'nama_pelapor' => 'required', 
                // 'no_telepon' => 'required', 
                'id_barang' => 'required',
                'tanggal' => 'required',
                'waktu' => 'required', 
                'id_lokasi' => 'required',
                'kd_barang' => 'required',
                'jenis_kerusakan' => 'required',
                // 'keterangan' => 'required',
                // 'upload_foto' => 'required', 
            ], $message);

            Kerusakan::where('id_kerusakan', $id)->update([
                'id_kerusakan' => $request->id_kerusakan,
                // 'nama_pelapor' => $request->nama_pelapor, 
                // 'no_telepon' => $request->no_telepon,
                'id_barang' => $request->id_barang, 
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'id_lokasi' => $request->id_lokasi, 
                'kd_barang' => $request->kd_barang,
                'jenis_kerusakan' => $request->jenis_kerusakan,
                // 'keterangan' => $request->keterangan,  
                //'upload_foto' => $request->upload_foto,
            ]);
        }

        return redirect('/kerusakan')->with('Data diedit','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penyelesaian::where('id_kerusakan',$id)->delete();
        Kerusakan::where('id_kerusakan',$id)->delete(); 
        return redirect()->route('kerusakan')->with('Data dihapus','Data berhasil dihapus');
    }

    public function cetakkerusakanpertanggal()
    {
        return view('Kerusakan.cetak-kerusakan-pertanggal');
    }

    public function cetakpertanggall($tglawal, $tglakhir)
    {
        //dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        // $cetakpertanggal = Kerusakan::with('kerusakan')->where('tanggal','LIKE', '%'. $tglakhir)
        // ->orwhere('tanggal', 'LIKE', '%'. $tglakhir)->get();
        // return view('Kerusakan.cetak-kerusakan-tanggal', compact('cetakpertanggal'));

        $cetakpertanggal = Kerusakan::whereBetween('tanggal',[$tglawal, $tglakhir])->get();
        return view('Kerusakan.cetak-kerusakan-tanggal', compact('cetakpertanggal'));
    }
}

    
