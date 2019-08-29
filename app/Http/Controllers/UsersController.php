<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        //用户模型 User::create() 创建成功后会返回一个用户对象，并包含新注册用户的所有信息。
        
        
		Auth::login($user);
		//注册成功自动登录
		
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        //由于 HTTP 协议是无状态的，所以 Laravel 提供了一种用于临时保存用户数据的方法 - 会话（Session），并附带支持多种会话后端驱动，可通过统一的 API 进行使用。
        //提交成功信息显示
        
        return redirect()->route('users.show', [$user]);
        
    }
    
}
