<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foil extends Model
{
    //use HasFactory;
    protected $table        = 'tb_foil';
    protected $primaryKey   = ['id_foil'];
    public $incrementing    = false;
    protected $fillable     = ['id_foil','id_foilgroup','foil_name','f_panjang','f_lebar','f_harga','f_ket','begda','endda'];
}
