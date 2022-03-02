<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InkList extends Model
{
    //use HasFactory;
    protected $table        = 'tb_tinta_t';
    protected $primaryKey   = ['id_tt'];
    public $incrementing    = false;
    protected $fillable     = ['id_tt','id_tinta','name_tinta_t','info_t','harga_tinta_t','begda','endda'];
}
