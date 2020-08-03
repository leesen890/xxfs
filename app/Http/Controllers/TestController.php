<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Test_a;
use DB;

class TestController extends Controller
{
    public function export(){
    	return Excel::download(new UsersExport, 'users.xlsx');
    }

    #添加操作add
    public function add(Request $request){
    	#实例化模型 将表和类映射起来
    	$model = new Test_a();
    	#给属性赋值, 将表里的字段与类的属性映射起来
    	#$model -> name = 'li森';
    	#$model -> age = '19';
    	#$model -> sex = '男';
    	#$result = $model -> save();

    	#方法二的添加操作
    	$result = $model -> create($request -> all());
    	dd($result);
    }
    public function look(){
    	return view('lee');
    }

    #查询 query
    public function query(){
    	//$data = Test_a::find(6) -> toArray();
    	
       #查询指定条件的第一条记录
    	//$data = Test_a::where('id','>',6) -> first();
    	$data = Test_a::where('id','>','4') -> get() -> toArray();
    	dd($data);
    }

    #修改,更新 update
    public function update(){
    	#ar模式的修改操作
    	//$data = Test_a::find(6);
    	#赋值属性 (需要修改的字段)
    	 //$data -> age = '15';
    	#将实例映射到记录
    	 //$result = $data -> save();

    	 //使用update方法
    	 $result = Test_a::where('id','7') -> update([
    	 	'age' => '15'
    	 	]);
    	 dd($result);
    }

    #删除操作 delete
    public function del(){
    	#$data = DB::table('test_a');
    	#$result = $data -> where('id','=','5');
    	#dd($result -> delete());
        $model = Test_a::find(2) -> delete();
        $sss = $model - find(1);
        dd($model);
        //dd($remove);
    }
}
