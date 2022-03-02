<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mica extends Model
{
    //use HasFactory;
    protected $table        = 'tb_mika';
    protected $primaryKey   = ['id_mika'];
    public $incrementing    = false;
    protected $fillable     = ['id_mika','mika_name','tamper_mika_type','mika_harga','panjang_mika','lebar_mika','mika_ket'];
}
