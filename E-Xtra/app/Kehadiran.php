<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    public $table = 't_kehadiran';

    protected $fillable = ['id_anggota','id_pertemuan','kehadiran'];
}
