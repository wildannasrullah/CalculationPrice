<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laser extends Model
{
    //use HasFactory;
    protected $table        = 'tb_laser';
    protected $primaryKey   = ['id_laser'];
    public $incrementing    = false;
    protected $fillable     = ['id_laser','laser_name','harga_laser'];
}
