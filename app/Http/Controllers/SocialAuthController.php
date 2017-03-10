<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;
use Illuminate\Support\Facades\View;

class SocialAuthController extends Controller
{
	public function redirectFacbook()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callbackFacbook()
    {
        $providerUser = Socialite::driver('facebook')->user();
        $getUser = User::where('id',$providerUser->getId())->first();
        if (!empty($getUser->email)){
            Auth::loginUsingId($getUser->id);
            return redirect('/');
        }else{
            View::share('providerUser',$providerUser);
            return redirect('user/register');
        }
    }
}
