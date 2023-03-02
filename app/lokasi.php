<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    public $timestamps = false;
    protected $table = 'lokasi';
    protected $fillable = ['id_lokasi','nama_lokasi']; 

    public function kerusakan()
    {
        return $this->hasMany('App\kerusakan');
    }
}
