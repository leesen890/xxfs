<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'upload';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','name','email','avatar'];	
}
