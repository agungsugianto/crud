<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable = ['nama','keterangan','id_kategori'];
    public function kategori(){
        return $this->belongsTo('App\kategori','id_kategori');
    }
}
