<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaserPertinax extends Model
{
    //use HasFactory;
    protected $table        = 'tb_laserpertinax';
    protected $primaryKey   = ['id_laser_pertinax'];
    public $incrementing    = false;
    protected $fillable     = ['id_laser_pertinax','laser_pertinax_name','harga_laser_pertinax'];
}
