<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    //use HasFactory;
    protected $table        = 'tb_mesin';
    protected $primaryKey   = ['id_mesin'];
    public $incrementing    = false;
    protected $fillable     = ['id_mesin','id_group','name_mesin','jum_warna','max_panjang','max_lebar','kapasitas','harga_p_jam','inline','max_pjg_plat','max_lbr_plat','aktif'];
}
