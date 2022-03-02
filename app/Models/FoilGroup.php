<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoilGroup extends Model
{
    //use HasFactory;
    protected $table        = 'tb_foilgroup';
    protected $primaryKey   = ['id_foilgroup'];
    public $incrementing    = false;
    protected $fillable     = ['id_foilgroup','foilgroup_name','info'];
}
