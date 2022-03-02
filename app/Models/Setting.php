<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //use HasFactory;
    protected $table        = 'tb_msetting';
    protected $primaryKey   = ['id_set'];
    public $incrementing    = false;
    protected $fillable     = ['id_set','groupset','variable'];
}
