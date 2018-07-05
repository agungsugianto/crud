<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $table = 'fakultas';
    protected $fillable =array('kedokteran','pertanian','hukum');
    public $timestamp =true;
    public funtion kategori(){
        return $this->hasMany('App\Kategoris','kategori_id');
           }
}
