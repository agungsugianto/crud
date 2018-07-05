<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable =array('ling_lab','ling_kampus','ling_perpus');
    public $timestamp =true;
}
