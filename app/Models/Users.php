<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //use HasFactory;

    protected $table = 'users';
    protected $primarykey = 'id';
    public $incrementing = false;
    protected $fillable = ['id','name','username','email','password','level', 'created_at','updated_at'];
}
