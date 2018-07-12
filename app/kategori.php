<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = ['nama'];
    public function fakultas()
    {
        return $this->hasMany('App\fakultas','id_kategori');
    }
}