<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $fillable = ('kedokteran','hukum','pertanian','peternakan');
    public function kategori(){
        return $this->hasMAny('App\Kategori','id_fakultas');
    }
}
