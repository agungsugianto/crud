<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable = ['nama','keterangan'];
    public function kategori(){
        return $this->belongsTo('App/id_kategori');
    }
}
