<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klise extends Model
{
    //use HasFactory;
    protected $table        = 'tb_klise';
    protected $primaryKey   = ['id_klise'];
    public $incrementing    = false;
    protected $fillable     = ['id_klise','klise_name','klise_tipe','klise_harga','klise_ket'];
}
