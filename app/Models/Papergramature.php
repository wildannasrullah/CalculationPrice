<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papergramature extends Model
{
    //use HasFactory;
    protected $table        = 'tb_papergramature';
    protected $primaryKey   = ['id_gsm'];
    public $incrementing    = false;
    protected $fillable     = ['id_gsm','id_pg2','gramature','tumpukan'];
}
