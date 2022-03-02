<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Eloquent;

class Papergroup2 extends Model
{
    //use HasFactory;
    protected $table        = 'tb_paperg2';
    protected $primaryKey   = ['id_pg2'];
    public $incrementing    = false;
    protected $fillable     = ['id_pg1','pg2_name','info_pg2'];
}
