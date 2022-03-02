<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ink extends Model
{
    //use HasFactory;
    protected $table        = 'tb_tinta';
    protected $primaryKey   = ['id_tinta'];
    public $incrementing    = false;
    protected $fillable     = ['id_tinta','name_tinta','info'];
}
