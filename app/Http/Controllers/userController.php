<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    //register 
    public function register(Request $request)
    {
        $incomingField = $request->validate([
            'username' => ['required', 'min:3', 'max:20', Rule::unique('users', 'username')],
            'password' => ['required', 'min:6', 'confirmed'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
        ]);
        $user = User::create($incomingField);
         auth()->login($user);

         return redirect('/')->with('success','Registretion Done') ;

    }public function showLoginpage(){
        return view('loginpage');
    }

    public function login(Request $request){
        $incomingField = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required'
        ]);
        if(auth()->attempt(['username'=> $incomingField['loginusername'],'password'=> $incomingField['loginpassword']])){
            $request->session()->regenerate();
            return redirect('/')->with('success','you are logedin');

        }
        else{
            return redirect('/')->with('failure','Invalid login');
        }
         

    }

    public function showCorrectHomepage(){
            if(auth()->check()){
                return view('homepage-feed');
            }
            return view('homepage');
    }
    public function logout(){
        auth()->logout();
        return redirect('/')->with('succes','Tata');
    }
    
}


