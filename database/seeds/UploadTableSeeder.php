<?php

use Illuminate\Database\Seeder;

class UploadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    	[
    	'name'  => '张三',
       	'email' => 'zhangsan@163.com',
    	'avatar' => './Lee/79eae429a9ccc62f1f23bf597cd73dd5.jpg',
    	],
    	[
    	'name'  => '张工',
    	'email' => 'zhanggong@163.com',
    	'avatar' => './Lee/79eae429a9ccc62f1f23bf597cd73dd5.jpg',
    	],
    ];
    //写入数据
    DB::table('upload') -> insert($data);
    }
}
