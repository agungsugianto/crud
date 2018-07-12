<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $fillable = ['gambar','keterangan'];
    public function galeri(){
        return $this->hasOne('App\id_galeri');
    }
}
