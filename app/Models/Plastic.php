<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plastic extends Model
{
    //use HasFactory;
    protected $table        = 'tb_laminating';
    protected $primaryKey   = ['id_laminate'];
    public $incrementing    = false;
    protected $fillable     = ['id_laminate','laminate_name','tamper_type', 'panjang_laminate','lebar_laminate','laminate_harga','ket_laminate','id_laminate_group','begda','endda'];
}
