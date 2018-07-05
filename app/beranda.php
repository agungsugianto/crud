<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    protected $table = 'beranda';
    protected $fillable =array('visi_misi','sejarah','struktur_or');
    public $timestamp =true;
}
