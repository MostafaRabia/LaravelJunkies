<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class Users extends Controller
{
	public function showRegister(){
		if (Route::currentRouteName()){
			return view(app('shop_view').'.Register',['providerUser'=>Route::currentRouteName()]);
		}
		return view(app('shop_view').'.Register');
	}
	public function Register(Request $r){
		$validator = Validator::make($r->all(),[
    		'user_name'		=>	'required|unique:users',
    		'user_email'	=>	'required|unique:users,email|email',
    		'user_password'	=>	'required',
    		'user_addres'	=>	'required',
    		'user_country'	=>	'required',
    		'user_city'		=>	'required',
    		'user_code'		=>	'required',
    		'user_phone'	=>	'required|unique:users,user_phone_number',
    	]);
    	if ($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}else{
    		$add = new User;
    		$add->email = $r->input('user_email');
    		$add->password = bcrypt($r->input('user_password'));
    		$add->user_name = $r->input('user_name');
    		$add->user_addres = $r->input('user_addres');
    		$add->user_country = $r->input('user_country');
    		$add->user_city = $r->input('user_city');
    		$add->user_code = $r->input('user_code');
    		$add->user_phone_number = $r->input('user_phone');
    		$add->user_prices = 0;
    		$add->user_admin = 0;
    		$add->user_confirmation = 0;
    		$add->user_banned = 0;
    		$add->save();
    		Auth::loginUsingId($add->id);
    		return redirect()->back();
    	}
	}
    public function showLogin(){
        return view(app('shop_view').'.Login');
    }
    public function Login(Request $r){
    	$validator = Validator::make($r->all(),[
    		'email'		=>	'required|email',
    		'password'	=>	'required'
    	]);
    	if ($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput();
    	}elseif (Auth::attempt(['email'=>$r->input('email'),'password'=>$r->input('password')])){
    		if (auth()->user()->user_admin==1){
    			return redirect('categories-list');
    		}else{
    			return redirect()->intended('/');
    		}
    	}else{
    		return redirect()->back()->withErrors(['Wrong'=>'Username or Password is Wrong']);
    	}
    }
}
