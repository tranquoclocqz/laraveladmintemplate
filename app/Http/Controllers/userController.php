<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class userController extends Controller
{
    function register(){
    	return view('backend/login');
    }
    function login(){
    	return view('backend/login');
    }
    function loginPost(Request $request){
    	$this->validate($request,[
    		'txt_username'=>'required',
    		'txt_password'=>'required|min:8|max:32'
    	],[
    		'txt_username.required'=>'Bạn chưa nhập tài khoản',
    		'txt_password.required'=>'Bạn chưa nhập mật khẩu',
    		'txt_password.min'=>'Mật khẩu 8 - 32 ký tự',
    		'txt_password.max'=>'Mật khẩu 8 - 32 ký tự',
    	]);
    	$user = DB::table('user')->select('id','salt','token')->where('username','like',"$request->txt_username")->get();
    	if(Auth::attempt(['username'=>$request,'password'=>md5($user['salt'].$request->txt_password.$user['token'])])){
    		return redirect('admin/index');
    	} else {
    		return redirect('admin/login')->with('message','Đăng nhập không không thành công');
    	}
    }
}
