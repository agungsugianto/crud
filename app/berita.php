<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ('id_prestasi');
    public function prestasi(){
        return $this->hasMany('App/id_prestasi');
    }
}
