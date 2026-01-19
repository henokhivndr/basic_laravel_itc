<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bebas extends Model
{
    protected $table = 'tb_bebas';
    protected $primaryKey = 'id_siswa';
    protected $guarded = ['id_siswa'];
}
