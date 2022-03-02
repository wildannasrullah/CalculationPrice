<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MachineGroup extends Model
{
    //use HasFactory;
    protected $table        = 'tb_mesingroup';
    protected $primaryKey   = ['id_group'];
    public $incrementing    = false;
    protected $fillable     = ['id_group','group_name','ket_group'];
}
