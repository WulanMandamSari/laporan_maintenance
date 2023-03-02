<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyelesaian extends Model
{
    public $timestamps= false;
    protected $table='penyelesaian'; 
    protected $fillable=['id_kerusakan','nama_barang','nama_teknisi','no_telepon','tanggal','lama_pengerjaan','solusi'];

    public function kerusakan()
    {
        return $this->belongsTo('App\kerusakan','id_kerusakan','id_kerusakan');
    }

    public function barang()
    {
        return $this->belongsTo('App\barang','id_barang','id_barang');
    }
}
