<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    public $table = 't_pertemuan';

    protected $fillable = ['tanggal','kegiatan'];
}
