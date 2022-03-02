<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    //use HasFactory;
    protected $table        = 'tb_approval';
    protected $primaryKey   = ['id_approval'];
    public $incrementing    = false;
    protected $fillable     = ['id_approval','tipe'];
}
