<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papersize extends Model
{
    //use HasFactory;
    protected $table = 'tb_papersize';
    protected $primarykey = 'id_size';
    public $incrementing = false;
    protected $fillable = ['id_size','id_gsm','length','width','price_per_kg'];

}
