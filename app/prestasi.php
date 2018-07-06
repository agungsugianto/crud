<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $fillable = ('prestasi');
    public function berita(){
        return $this->belongsto('App/Berita','id_prestasi');
    }
}
