<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Test_a;
use App\Table_lee;
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
        $data = Test_a::find(2);
        dd(Test_a::all());  
    }


                        #周二练习

    public function lookt() {
        return view('lookt');
    }

    public function a(Request $request) {
        $model = new Table_lee();
        #$result = $model -> create($request -> all());
        $model -> name = '西西弗斯';
        $model -> age ='10';
        $model -> email = 'xxfusi@163.com';
        $result = $model -> save();
        dd($result);
    }

    public function q(){
        $model = Table_lee::where('id','3') -> get() -> toArray();
        dd($model);
    }

    public function u(){
        $model = Table_lee::find(3);
        $model -> age = '15';
        $result = $model -> save();
        dd($result);
    }

    public function d(){
        $model = Table_lee::find(2);
        $result = $model -> delete();
        dd($result);
    }

    #自动验证
      public function verification(Request $request){
        #判断一下请求是否是post请求
       if($request->isMethod('post') ){
        $this -> validate($request,[
            'name' => 'required|min:2|max:15',
            'age' => 'required|integer|min:1|max:100',
            'email' => 'required|email'
            ],[
                'required' => ':attribute 为必填项',
                'min'      => ':attribute 长度不符合要求',
                'max'      => ':attribute 长度不符合要求',
                'integer'  => ':attribute 必须是整数',
              ],[
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.email' => '邮箱',
              ]);
       }
         #$this -> validate($request,[
            //具体的规则
              #字段=>验证规则1|验证规则2|..
            //'name' => 'required|min:2|max:15',
            //'age'  => 'required|integer|min:1|max:100',
            //'email'=> 'required|email'
            //]);
       //else{
        #展示视图
        return view('verification');
        //}
      }

      public function store(Request $request){
        
      }
}
