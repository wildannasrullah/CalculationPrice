<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertinax extends Model
{
    //use HasFactory;
    protected $table        = 'tb_pertinax';
    protected $primaryKey   = ['id_pertinax'];
    public $incrementing    = false;
    protected $fillable     = ['id_pertinax','pertinax_name','harga_pertinax'];
}
