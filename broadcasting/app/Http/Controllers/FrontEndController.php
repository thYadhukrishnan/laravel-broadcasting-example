<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvent;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function loginView(){
        return view('login.loginPage');
    }

    public function doLogin(){
        $creds = [
            'email' =>request('email'),
            'password' => request('password'),
        ];

        if(auth::attempt($creds,true)){
            return redirect()->route('homePage');
        }else{
            return redirect()->route('loginView')->with('message','Invalid credentials');
        }
    }

    public function register(){
        return view('login.register');
    }

    public function userSave(){
        $name = request()->input('name');
        $password = bcrypt(request()->input('password'));
        $email = request()->input('email');
        
        $user  = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        UserCreatedEvent::dispatch($user);
        
        return redirect()->route('loginView')->with('message','please log in');
    }

    public function homePage(){

        return view('home.home');
    }

    public function logOut(){
        Auth::logout();

        return redirect()->route('loginView')->with('message','logged out');
    }

}
