<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
class SessionsController extends Controller
{
    public function __construct(){
        $this -> middleware('guest',['only' => ['create']]);
    }
    /**
    *跳转登录界面
    *return view
    */
    public function create(){
        return view('sessions.create');
    }
    /**
    *登陆操作
    *
    *
    */
    public function store(Request $request){
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials,$request -> has('remember'))){
            if(Auth::user()->activated) {
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', '你的账号未激活，请检查邮箱中的注册邮件进行激活。');
                return redirect('/');
            }
        }else{
            session() -> flash('danger','很抱歉，您的邮箱或密码输入错误');
            return redirect() -> back();
        }
    }
    /**
    *
    *推出登陆
    *
    */
    public function destroy(){
        Auth::logout();
        session() -> flash('success', '您已经成功推出登陆');
        return redirect('login');
    }
}
