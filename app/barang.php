<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $timestamps = false;
    protected $table = 'barang';
    protected $fillable = ['id_barang','id_lokasi','kd_barang','nama_barang','stock'];
    public function lokasi()
    {
        return $this->belongsTo('App\lokasi','id_lokasi','id_lokasi');
    }
}
