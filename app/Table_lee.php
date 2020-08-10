<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_lee extends Model
{
    #关联数据表
    protected $table = 'table_lee';
    #定义主键为id
    protected $primaryKey = 'id';
    #禁止时间戳
    public $timestamps = false;
    #设置白名单
    protected $fillable = ['id','name','age','email','avatar'];
}
