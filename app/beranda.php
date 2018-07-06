<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beranda extends Model
{
    protected $table ='berandas';
    protected $fillable = ['asalusul','visi_misi','struktur_or'];
}
