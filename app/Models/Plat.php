<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table        = 'tb_plat';
    protected $primaryKey   = ['id_plat'];
    public $incrementing    = false;
    protected $fillable     = ['id_plat','id_mesin','plat_name','harga_plat','info_plat','id_plat_group','begda','endda','length_plat','width_plat'];
    //protected $fillable     = ['id_plat_group','id_mesin','plat_name','harga_plat','length_plat','width_plat','info_plat','begda','endda'];
}
