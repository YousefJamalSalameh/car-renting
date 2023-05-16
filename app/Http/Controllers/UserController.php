<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function loginview(){

        return view('home.login');
    }
    public function login(Request $request){
        $request->validate([

            'email'=>'required|email',
            'password'=>'required',


        ]);

        $email=$request->input('email');
        $pass=$request->input('password');
        $user=User::where('email',$email)->first();

        if(!$user){
            return redirect()->back()->with('message','email Not found');
        }
        $pasword=$user->password;


        if($pasword!=$pass){
            return redirect()->back()->with('message','Wrong password');
        }
        else{
            return view('home.index');
        }
    }
    public function registerview(){

        return view('home.register');
    }
    public function register(Request $request){
        $user = new User();
        $request->validate([
            'username'=>'required|String',
            'email'=>'required|email',
            'password'=>'required',
            'RepeatPassword'=>'required'


        ]);
        $user->username=$request->input('username');
        $user->email=$request->input('email');
        $pass=$request->input('password');
        $reppass=$request->input('RepeatPassword');
        if($pass==$reppass){
            $user->password=$request->input('password');

            $user->save();
            return redirect()->back()->with('message','register completed successfully ');
        }
        if ($pass!=$reppass){
            return redirect()->back()->with('error','plz check your password again');
        }

    }
}
