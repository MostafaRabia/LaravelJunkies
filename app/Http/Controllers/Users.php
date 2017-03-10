<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class Users extends Controller
{
	public function showRegister(){
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
            if ($r->has('id')){
                $add->id_socialite = $r->input('id');
            }
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
    public function showProfile($id){
    	$getAboutUser = User::find($id);
    	return view(app('shop_view').'.Profile',['getAboutUser'=>$getAboutUser]);
    }
    public function showEdit($id){
    	$getAboutUser = User::find($id);
    	return view(app('shop_view').'.editProfile',['getAboutUser'=>$getAboutUser,'id'=>$id]);
    }
    public function editUserPost(Request $r,$id){
    	$editUser = User::find($id);
        $validator = Validator::make($r->all(),[
            'email' =>  'required|email',
            'name' =>  'required',
            'old-password' =>  'required',
            'now-password' =>  'required',
            'new-password'=>  'required',
            'address'=>  'required',
            'user_country'=>  'required',
            'city'=>  'required',
            'code'=>  'required',
            'phone_number'=>  'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
        	if ($r->input('old-password')==$r->input('now-password')){
        		$new_password = bcrypt($r->input('new-password'));
        	}else{
        		$new_password = $editUser->password;
        	}
            $editUser->email = $r->input('email');
            $editUser->password = $new_password;
            $editUser->user_name = $r->input('name');
            $editUser->user_addres = $r->input('address');
            $editUser->user_country = $r->input('user_country');
            $editUser->user_city = $r->input('city');
            $editUser->user_code = $r->input('code');
            $editUser->user_phone_number = $r->input('phone_number');
            $editUser->save();
            return redirect('profile/'.$id);
        }
    }
}
