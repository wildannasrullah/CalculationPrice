<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //use HasFactory;
    protected $table        = 'tb_papan';
    protected $primaryKey   = ['id_papan'];
    public $incrementing    = false;
    protected $fillable     = ['id_papan','papan_name','harga_papan','ket_papan'];
}
