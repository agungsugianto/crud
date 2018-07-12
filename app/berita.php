<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = ['lampau','terkini','id_kategori'];
    public function kategori(){
        return $this->belongsTo('App\kategori','id_kategori');
    }
}
