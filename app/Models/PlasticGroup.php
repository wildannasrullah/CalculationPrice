<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticGroup extends Model
{
    //use HasFactory;
    protected $table        = 'tb_laminating_group';
    protected $primaryKey   = ['id_laminating_group'];
    public $incrementing    = false;
    protected $fillable     = ['id_laminating_group','laminating_group_name','info_laminating_group'];
}
