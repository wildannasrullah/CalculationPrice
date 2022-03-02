<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalRange extends Model
{
    //use HasFactory;
    protected $table        = 'tb_approvalrange';
    protected $primaryKey   = ['id_apr'];
    public $incrementing    = false;
    protected $fillable     = ['id_apr','min','max','min_prof','max_prof','status'];
}
