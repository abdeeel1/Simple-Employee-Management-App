<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLogin(){

        return view('login.login');
    }

    public function storeLogin(Request $request){
        
        $email = $request->input('email');
        $password = $request->input('password');

        $dataLogin = ["email" => $email , "password" => $password];

        
        if(Auth::attempt($dataLogin)){
            $request->session()->regenerate();
            return redirect()->route('employees.index')->with('success', 'Login with success.');
        }else{
            return redirect()
            ->route('login.show')
            ->withErrors(['email' => 'Email or Password are incorrect !'])
            ->onlyInput('email');
        }
    }

    public function showSignUp(){
        
        return view('login.signup');
    }

    public function storeSignUp(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('login.show')->with('success', 'Sign Up with success.');
    }
}
