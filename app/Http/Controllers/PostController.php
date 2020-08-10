<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Upload;
use App\Table_lee;

class PostController extends Controller
{
    public function create(){
    	return view('create');
    }

    public function store(Request $request){
    	$validatedData = $request -> validate([
    		  'name' => 'required|min:2|max:20',
    		  'age'  => 'required|integer|max:100|min:1',
    		  'email'=> 'required|email',
              'captcha' => 'required|captcha',
    		]);
    	echo '博客验证通过';
    }

    public function http(Request $request){
    	#判断请求类型
    	if($request -> isMethod('POST')){
    		#上传
    		 #判断文件是否正常
    		if($request -> hasFile('avatar') && $request -> file('avatar')->isValid() ){
    			#获取文件的原始名称
    			//dd($request -> file('avatar') -> getClientOriginalName());
    			#获取文件的大小
    			  //dd($request -> file('avatar')-> getClientSize() );
    			$path = md5(time() . rand(100000,999999)) . '.' . $request -> file('avatar')
    			 -> getClientOriginalExtension();
    			$request -> file('avatar') -> move('./uploads/',$path);
    			#获取全部的数据
    			$data = $request -> all();
    			#将路径添加到数组当中
    			$data['avatar'] = './uploads/' . $path;
    			$result = Table_lee::create($data);
    			//判断是否成功
                if($result){
                    return redirect('paging');
                }
    		}
    	}else{
    		return view('http');
    	}
    }


    public function paging(){
        #查询数据
        $data = Upload::paginate(2);
       #示视图并传递数据
        return view('paging' , compact('data'));
    }


    public function upload(Request $request){
    
        if($request -> isMethod('POST') ){
            if ($request -> hasFile('avatar') && $request -> file('avatar') -> isValid() ){
                    
                $path = md5(time() . rand(100000,999999)) . '.' . $request -> file('avatar') 
                -> getClientOriginalExtension();

                $request -> file('avatar') -> move('./Lee/',$path);

                #获取全部的数据
                $data = $request -> all();
                #将路径添加到数组当中
                $data['avatar'] = './Lee/' . $path;
                $result = Upload::create($data);
              
        echo "上传成功";        
            }
        }else{
          
            return view('upload');
        }
    }


    public function up(Request $request){
        $data = $request -> validate([
             'name' => 'required|min:2|max:20',
              'email'=> 'required|email',
              'captcha' => 'required|captcha',
            ]);
        return redirect('upload');
    }


//ajax页面展示
    public function ajax(){
        return view('ajax');
    }
//ajax的响应
    public function response(){
        //查询数据
        $data = Table_lee::all();
        //json格式响应
        //return json_encode($data);
        return response() -> json($data);
    }
}