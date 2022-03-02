<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatGroup extends Model
{
    //use HasFactory;
    protected $table        = 'tb_plat_group';
    protected $primaryKey   = ['id_plat_group'];
    public $incrementing    = false;
    protected $fillable     = ['id_plat_group','plat_group_name','info_plat_group','jumlah_lbr'];
}
