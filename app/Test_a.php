<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_a extends Model
{
    #定义模型关联的数据表
    protected $table = 'test_a';
    #定义主键（可选）
    protected $primaryKey = 'id';
    #定义禁止时间戳
    public $timestamps = false;
    #设置允许写入的数据字段
    protected $fillable = ['id','name','age','sex'];
}
