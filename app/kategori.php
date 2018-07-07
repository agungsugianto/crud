<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ('nama');
    public function kategori(){
        return $this->hasMany('App/id_kategori');
    }
}
