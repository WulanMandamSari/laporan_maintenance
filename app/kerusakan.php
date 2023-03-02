<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kerusakan extends Model
{
    public $timestamps =false;
    protected $table ='kerusakan';
    protected $fillable = ['id_kerusakan','nama_pelapor','no_telepon','id_barang','tanggal','waktu','id_lokasi','kd_barang','jenis_kerusakan','keterangan','upload_foto'];
    public function lokasi()
    {
        return $this->belongsTo('App\lokasi','id_lokasi','id_lokasi');
    }

    public function barang()
    {
        return $this->belongsTo('App\barang','id_barang','id_barang');
    }
}

