<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gambar extends Model
{
    protected $table = "gambar"; 
    protected $fillable = ['id','upload_foto'];
}
