<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inline extends Model
{
    //use HasFactory;
    protected $table        = 'tb_inline';
    protected $primaryKey   = ['id_inline'];
    public $incrementing    = false;
    protected $fillable     = ['id_inline','name_inline','kategori_inline','harga_inline','keterangan','inline_variable'];
}
