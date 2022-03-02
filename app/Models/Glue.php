<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glue extends Model
{
    //use HasFactory;
    protected $table        = 'tb_glue';
    protected $primaryKey   = ['id_glue'];
    public $incrementing    = false;
    protected $fillable     = ['id_glue','glue_name','glue_variable', 'glue_ket','glue_harga','glue_proses'];
}
