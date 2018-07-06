<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ('nama_fakuktas');
    public function fakultas(){
        return $this->belongsto('App/id_fakultas');
    }
}
