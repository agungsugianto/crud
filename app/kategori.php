<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'fakultas';
    protected $fillable = array('kedokteran','pertanian','hukum');
    public $timestamp =true;
    public funtion fakultas(){
        return $this->belongTo(Fakultas::class);
           }
}
