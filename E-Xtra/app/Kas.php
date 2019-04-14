<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    public $table = 't_kas';

    protected $fillable = ['id_pertemuan','jumlah_masuk'];
}
