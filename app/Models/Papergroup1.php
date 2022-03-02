<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papergroup1 extends Model
{
    //use HasFactory;
    //protected $connection = 'pgsql';
    protected $table = 'tb_paperg1';
    protected $primaryKey = ['id_pg1'];
    public $incrementing = false;
    protected $fillable = ['paper_name','info'];
}
