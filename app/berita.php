<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = ('');
    public function kategori(){
        return $this->belongsTo('App/id_kategori');
    }
}
