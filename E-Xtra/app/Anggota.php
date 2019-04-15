<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public $table = 't_anggota';

    protected $fillable = ['nama','jenis_kelamin','kelas'];
}
